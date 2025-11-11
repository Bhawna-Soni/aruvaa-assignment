<?php
// Email templates (simple)
$templates = array(
    "selected" => array(
        "subject" => "Job Application - [Position]",
        "body" => "Dear [Candidate Name],\n\nWe are pleased to inform you that you have been selected for the position of [Position].\n\nPlease reply to this email to confirm your acceptance.\n\nBest regards,\nHR Team"
    ),
    "rejected" => array(
        "subject" => "Job Application - [Position]",
        "body" => "Dear [Candidate Name],\n\nThank you for applying for the position of [Position].\n\nWe regret to inform you that we have decided to move forward with other candidates.\n\nBest regards,\nHR Team"
    )
);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $name = isset($_POST['candidate_name']) ? trim($_POST['candidate_name']) : '';
    $email = isset($_POST['candidate_email']) ? trim($_POST['candidate_email']) : '';
    $position = isset($_POST['position']) ? trim($_POST['position']) : '';
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    $response = array("success" => false, "message" => "");

    if ($status === "" || $name === "" || $email === "" || $position === "") {
        $response['message'] = "All fields required.";
        echo json_encode($response);
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = "Invalid email.";
        echo json_encode($response);
        exit;
    }
    if (!array_key_exists($status, $templates)) {
        $response['message'] = "Invalid status.";
        echo json_encode($response);
        exit;
    }

    $subject = str_replace(array('[Candidate Name]', '[Position]'), array($name, $position), $templates[$status]['subject']);
    $body = str_replace(array('[Candidate Name]', '[Position]'), array($name, $position), $templates[$status]['body']);

    if ($action === "preview") {
        $response['success'] = true;
        $response['preview_subject'] = $subject;
        $response['preview_body'] = nl2br(htmlspecialchars($body));
        echo json_encode($response);
        exit;
    }

    if ($action === "send") {
        // Use system sendmail directly for sending email
        $to = escapeshellarg($email);
        $full_subject = "Subject: " . $subject;
        $headers = "From: hr@example.com\r\n";
        $headers .= "Reply-To: hr@example.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $sendmail = "/usr/sbin/sendmail -t -i";

        // Construct raw message
        $mail_message =
            "To: $email\r\n" .
            $full_subject . "\r\n" .
            $headers . "\r\n" .
            $body;

        // Open a pipe to sendmail
        $sent = false;
        $sendmail_handle = popen($sendmail, 'w');
        if ($sendmail_handle) {
            fwrite($sendmail_handle, $mail_message);
            $result = pclose($sendmail_handle);
            $sent = ($result === 0);
        }
        if ($sent) {
            $response['success'] = true;
            $response['message'] = "Email sent to $email using sendmail.";
        } else {
            $response['message'] = "Send failed. Could not send mail via sendmail.";
        }
        echo json_encode($response);
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HR Email Response</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center">
    <div class=" w-full max-w-lg mt-10">
    <a href="index.php" class="max-w-5xl mx-auto"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
    <div class="bg-white rounded-lg shadow p-6 ">
    <h1 class="text-xl font-bold text-blue-800 mb-5 text-center">HR Candidate Email Response</h1>
    <form id="emailForm" class="space-y-4" autocomplete="off">
        <div>
            <label class="block mb-1">Candidate Status</label>
            <div class="flex gap-6">
                <label><input type="radio" name="status" value="selected" required> Selected</label>
                <label><input type="radio" name="status" value="rejected" required> Rejected</label>
            </div>
        </div>
        <div>
            <label class="block mb-1" for="candidate_name">Candidate Name</label>
            <input type="text" name="candidate_name" id="candidate_name" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1" for="candidate_email">Candidate Email</label>
            <input type="email" name="candidate_email" id="candidate_email" class="w-full border rounded px-3 py-2" required>
        </div>
        <div>
            <label class="block mb-1" for="position">Position Applied</label>
            <input type="text" name="position" id="position" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="flex justify-between gap-3 mt-4">
            <button type="button" id="previewBtn" class="w-1/2 bg-blue-600 text-white py-2 rounded">Preview</button>
            <button type="button" id="sendBtn" class="w-1/2 bg-green-600 text-white py-2 rounded">Send Email</button>
        </div>
        <div id="formMessages" class="mt-4 text-center text-sm"></div>
    </form>

    <div id="previewArea" class="mt-6 hidden border rounded p-4 bg-gray-50">
        <div class="font-semibold mb-2">Preview</div>
        <div class="mb-2">
            <b>Subject:</b> <span id="previewSubject"></span>
        </div>
        <div class="mb-2">
            <b>Message:</b>
            <div id="previewBody" class="bg-white p-3 border rounded"></div>
        </div>
        <button id="closePreview" class="mt-3 px-4 py-1 bg-gray-300 rounded">Close Preview</button>
    </div>
</div>
</div>

<script>
var form = document.getElementById('emailForm');
var previewBtn = document.getElementById('previewBtn');
var sendBtn = document.getElementById('sendBtn');
var previewArea = document.getElementById('previewArea');
var previewSubject = document.getElementById('previewSubject');
var previewBody = document.getElementById('previewBody');
var closePreview = document.getElementById('closePreview');
var formMessages = document.getElementById('formMessages');

function getFormData() {
    return {
        status: form.status.value,
        candidate_name: form.candidate_name.value,
        candidate_email: form.candidate_email.value,
        position: form.position.value
    };
}

function showMsg(msg, ok) {
    formMessages.textContent = msg;
    formMessages.className = "mt-4 text-center text-sm ";
    if(ok){
        formMessages.className += "text-green-600";
    } else {
        formMessages.className += "text-red-600";
    }
}

function previewOrSend(action) {
    formMessages.textContent = "";
    var f = getFormData();
    if (f.status === "" || f.candidate_name === "" || f.candidate_email === "" || f.position === "") {
        showMsg("All fields required.", false);
        return;
    }
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!pattern.test(f.candidate_email)) {
        showMsg("Invalid email.", false);
        return;
    }
    var data = new URLSearchParams(f);
    data.append("action", action);

    fetch("email_send.php", {
        method: "POST",
        headers: {"Accept":"application/json"},
        body: data
    })
    .then(function(res){ return res.json(); })
    .then(function(res){
        if(action === "preview") {
            if(res.success){
                previewSubject.textContent = res.preview_subject;
                previewBody.innerHTML = res.preview_body;
                previewArea.classList.remove("hidden");
            } else {
                previewArea.classList.add("hidden");
                showMsg(res.message ? res.message : "Preview failed.", false);
            }
        }
        if(action === "send"){
            showMsg(res.message ? res.message : (res.success ? "Sent." : "Send failed."), res.success);
        }
    })
    .catch(function(){
        showMsg("Server error.", false);
    });
}

previewBtn.onclick = function(){ previewOrSend("preview"); };
closePreview.onclick = function(){ previewArea.classList.add("hidden"); };
sendBtn.onclick = function(){ previewOrSend("send"); };

</script>
</body>
</html>
