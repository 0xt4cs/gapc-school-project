$(document).ready(function () {
  //go back to user info
  function showUserInfo() {
    $("#deductions").slideUp();
    $("#user-info").slideDown();
  }
  $("#up-arrow-btn").click(function () {
    showUserInfo();
  });
  // Slide to deductions form
  $("#continue-btn").click(function () {
    $("#user-info").slideUp();
    $("#deductions").slideDown();
  });

  // Calculate and display payroll data
  $("#payroll-form").submit(function (event) {
    event.preventDefault();

    const companyName = $("#company-name").val();
    const fullName = $("#full-name").val();
    const position = $("#position").val();
    const daysWorked = parseFloat($("#days-worked").val());
    const hoursWorked = parseFloat($("#hours-worked").val());
    const hourlyRate = parseFloat($("#hourly-rate").val());
    const sss = parseFloat($("#sss").val());
    const gsis = parseFloat($("#gsis").val());
    const philHealth = parseFloat($("#phil-health").val());
    const otherFees = parseFloat($("#other-fees").val());

    const grossPay = daysWorked * hoursWorked * hourlyRate;
    const totalDeductions = sss + gsis + philHealth + otherFees;
    const netPay = grossPay - totalDeductions;

    // Add the data to the table
    const newRow = `
      <tr>
        <td>${companyName}</td>
        <td>${fullName}</td>
        <td>${position}</td>
        <td>${daysWorked}</td>
        <td>${hoursWorked}</td>
        <td>${totalDeductions.toFixed(2)}</td>
        <td>${grossPay.toFixed(2)}</td>
        <td>${netPay.toFixed(2)}</td>
        <td>
        <div class="dropdown">
          <button class="btn btn-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-three-dots-vertical"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <button class="dropdown-item delete-row-btn" type="button">Delete</button>
            <button class="dropdown-item move-up-btn mv" type="button">Move Up</button>
            <button class="dropdown-item move-down-btn mv" type="button">Move Down</button>
            <button class="dropdown-item print-btn" type="button">Print</button>
          </div>
        </div>
      </td>
      </tr>
    `;
    const newRowJQuery = $(newRow);
    $("#payroll-data").append(newRowJQuery);

    // Add data attributes to the newRowJQuery object
    newRowJQuery.find("td:eq(5)").data("sss", sss);
    newRowJQuery.find("td:eq(5)").data("gsis", gsis);
    newRowJQuery.find("td:eq(5)").data("philhealth", philHealth);
    newRowJQuery.find("td:eq(5)").data("otherfees", otherFees);

    // Reset the form
    $("#payroll-form").trigger("reset");
    $("#user-info").slideDown();
    $("#deductions").slideUp();
  });
  //go home page
  $(".go-back-btn").click(function () {
    window.location.href = "../home/";
  });
  //action buttons
  $(document).on("click", ".delete-row-btn", function () {
    $(this).closest("tr").remove();
  });
  $(document).on("click", ".move-up-btn", function () {
    const row = $(this).closest("tr");
    row.insertBefore(row.prev());
  });
  $(document).on("click", ".move-down-btn", function () {
    const row = $(this).closest("tr");
    row.insertAfter(row.next());
  });
  $(document).on("click", ".print-btn", function () {
    const row = $(this).closest("tr");
    printPayslip(row);
  });
});
function printPayslip(row) {
  const daysWorked = row.find("td:eq(3)").text();
  const hoursWorked = row.find("td:eq(4)").text();
  const hourlyRate = row.find("td:eq(6)").text() / (daysWorked * hoursWorked);
  const grossPay = daysWorked * hoursWorked * hourlyRate;
  const totalDeductions = row.find("td:eq(5)").text();
  const netPay = row.find("td:eq(7)").text();

  const payslipContent = `
    <style>
      @media print {
        body {
          font-family: Arial, sans-serif;
        }
        .content {
          display: flex;
          flex-direction: column;
          align-items: center;
        }
        .center {
          text-align: center;
        }
        .two-columns {
          display: flex;
          justify-content: space-between;
          width: 100%;
        }
        .left {
          text-align: left;
        }
        .right {
          text-align: left;
        }
        table {
          width: 100%;
          border-collapse: collapse;
        }
        th {
          background-color: black;
          color: white;
          padding: 5px;
        }
        td {
          padding: 5px;
        }
        .deduction-table {
          margin-top: 1rem;
        }
      }
    </style>
    <div class="content">
      <h4 class="center">Governor Andres Pascual College</h4>
      <h5 class="center">1045 M. Naval St, Navotas, 1485 Metro Manila</h5>
      <br>
      <div class="two-columns">
        <div class="left">
          Company Name: ${row.find("td:eq(0)").text()}<br>
          Full Name: ${row.find("td:eq(1)").text()}<br>
          Position: ${row.find("td:eq(2)").text()}
        </div>
        <div class="right">
          Day(s) of Work: ${daysWorked}<br>
          Hour(s) of Work: ${hoursWorked}<br>
          Hourly Rate: ${hourlyRate}
        </div>
      </div>
      <br><br>
      <table>
        <thead>
          <tr>
            <th>Information</th>
            <th>Computation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Days of Work : </td>
            <td>${daysWorked}</td>
          </tr>
          <tr>
            <td>Hours of Work : </td>
            <td>${hoursWorked}</td>
          </tr>
          <tr>
            <td>Hourly Rate : </td>
            <td>${hourlyRate}</td>
          </tr>
          <tr>
            <th>Gross Pay : </th>
            <td>${grossPay.toFixed(2)}</td>
          </tr>
        </tbody>
      </table>
      <br>
      <table class="deduction-table">
        <thead>
          <tr>
            <th>Deductions</th>
            <th>Computation</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>SSS : </td>
          <td>${row.find("td:eq(5)").data("sss")}</td>
        </tr>
        <tr>
          <td>GSIS : </td>
          <td>${row.find("td:eq(5)").data("gsis")}</td>
        </tr>
        <tr>
          <td>PhilHealth : </td>
          <td>${row.find("td:eq(5)").data("philhealth")}</td>
        </tr>
        <tr>
          <td>Other Fees : </td>
          <td>${row.find("td:eq(5)").data("otherfees")}</td>
        </tr>
        <tr>
          <th>Net Pay : </th>
          <td>${netPay}</td>
        </tr>
      </tbody>
    </table>
    <br>
  </div>
`;

  // Create an iframe
  const iframe = document.createElement("iframe");
  iframe.style.display = "none";
  document.body.appendChild(iframe);

  // Set iframe content
  iframe.contentDocument.write("<html><head></head><body>");
  iframe.contentDocument.write(payslipContent);
  iframe.contentDocument.write("</body></html>");
  iframe.contentDocument.close();

  // Print the iframe content
  iframe.contentWindow.print();

  // Remove the iframe after printing
  setTimeout(() => {
    document.body.removeChild(iframe);
  }, 500);
}
