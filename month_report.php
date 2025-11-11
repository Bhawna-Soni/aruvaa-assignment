<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Work Calendar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-5xl mx-auto  mt-8">
      <a href="index.php" class="max-w-5xl mx-auto"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
      <div class="p-4 bg-white rounded shadow">
        <h2 class="text-lg font-bold mb-4 text-blue-900">Weekoff Entry</h2>
        <div class="flex items-center mb-4">
          <input
            id="halfDayWeekend"
            class="h-4 w-4 text-blue-500 border-gray-300 mr-2"
            type="checkbox"
            checked
          />
          <label class="text-normal" for="halfDayWeekend">
            Half working day &amp; half weekend
          </label>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full border border-gray-300 bg-white">
            <thead>
              <tr class="bg-gray-200 text-gray-700">
                <th class="py-1 px-2 text-left"></th>
                <th class="py-1 px-2">All</th>
                <th class="py-1 px-2">1st</th>
                <th class="py-1 px-2">2nd</th>
                <th class="py-1 px-2">3rd</th>
                <th class="py-1 px-2">4th</th>
                <th class="py-1 px-2">5th</th>
              </tr>
            </thead>
            <tbody>
              <!-- Sunday Row -->
              <tr>
                <td class="py-1 px-2 text-sm font-medium">Sunday</td>
                <td class="text-center">
                  <input type="checkbox" id="sundayAll" class="text-blue-500" />
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay sundayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay sundayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay sundayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay sundayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay sundayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
              </tr>
              <!-- Monday Row -->
              <tr>
                <td class="py-1 px-2 text-sm font-medium">Monday</td>
                <td class="text-center">
                  <input type="checkbox" id="mondayAll" class="text-blue-500" />
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay mondayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay mondayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay mondayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay mondayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay mondayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
              </tr>
              <!-- Tuesday Row -->
              <tr>
                <td class="py-1 px-2 text-sm font-medium">Tuesday</td>
                <td class="text-center">
                  <input type="checkbox" id="tuesdayAll" class="text-blue-500" />
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay tuesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay tuesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay tuesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay tuesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay tuesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
              </tr>
              <!-- Wednesday Row -->
              <tr>
                <td class="py-1 px-2 text-sm font-medium">Wednesday</td>
                <td class="text-center">
                  <input type="checkbox" id="wednesdayAll" class="text-blue-500" />
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay wednesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay wednesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay wednesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay wednesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay wednesdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
              </tr>
              <!-- Thursday Row -->
              <tr>
                <td class="py-1 px-2 text-sm font-medium">Thursday</td>
                <td class="text-center">
                  <input type="checkbox" id="thursdayAll" class="text-blue-500" />
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay thursdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay thursdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay thursdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay thursdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay thursdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
              </tr>
              <!-- Friday Row -->
              <tr>
                <td class="py-1 px-2 text-sm font-medium">Friday</td>
                <td class="text-center">
                  <input type="checkbox" id="fridayAll" class="text-blue-500" />
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay fridayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay fridayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay fridayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay fridayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay fridayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day">Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
              </tr>
              <!-- Saturday Row -->
              <tr>
                <td class="py-1 px-2 text-sm font-medium">Saturday</td>
                <td class="text-center">
                  <input type="checkbox" id="saturdayAll" class="text-blue-500" />
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay saturdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day" selected>Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay saturdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day" selected>Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay saturdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day" selected>Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay saturdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day" selected>Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="flex items-center">
                    <input type="checkbox" class="halfWorkingDay saturdayDay text-blue-500 mr-1" />
                    <select class="halfOption hidden border rounded px-1 py-0.5 text-sm">
                      <option value="Full Day" selected>Full Day</option>
                      <option value="1st Half">1st Half</option>
                      <option value="2nd Half">2nd Half</option>
                    </select>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="flex gap-2 mt-6">
          <button class="bg-blue-600 text-white py-1 px-6 rounded hover:bg-blue-700">
            Save
          </button>
          <button class="bg-gray-300 text-gray-700 py-1 px-6 rounded hover:bg-gray-400">
            Cancel
          </button>
        </div>
      </div>
    </div>
  <script>
    // show and hide dropdown as per checkbox
    function updateDropdowns() {
      document.querySelectorAll("tr").forEach(tr => {
        tr.querySelectorAll(".halfWorkingDay").forEach((cb) => {
          const sel = cb.nextElementSibling;
          if (cb.checked) {
            sel.classList.remove("hidden");
          } else {
            sel.classList.add("hidden");
          }
        });
      });
    }
    document.querySelectorAll(".halfWorkingDay").forEach(cb => {
      cb.addEventListener("change", updateDropdowns);
    });
    updateDropdowns();

    // checkbox checked unchecked
    document.getElementById("halfDayWeekend").addEventListener("change", function () {
      const enabled = this.checked;
      document.querySelectorAll(".halfWorkingDay").forEach(cb => {
        cb.disabled = !enabled;
        if (!enabled) {
          cb.checked = false;
        }
      });
      updateDropdowns();
    });

    // if week all check then all its checkbox checked
    const dayMap = [
      { id: "sundayAll", className: "sundayDay" },
      { id: "mondayAll", className: "mondayDay" },
      { id: "tuesdayAll", className: "tuesdayDay" },
      { id: "wednesdayAll", className: "wednesdayDay" },
      { id: "thursdayAll", className: "thursdayDay" },
      { id: "fridayAll", className: "fridayDay" },
      { id: "saturdayAll", className: "saturdayDay" }
    ];

    dayMap.forEach(({ id, className }) => {
      const allBox = document.getElementById(id);
      if (!allBox) return;
      allBox.addEventListener("change", function () {
        var checked = this.checked;
        document.querySelectorAll('.halfWorkingDay.' + className).forEach(cb => {
          cb.checked = checked;
        });
        updateDropdowns();
      });
    });
  </script>
</body>
</html>