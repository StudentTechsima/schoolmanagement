<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Fee Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .stu-payment-container {
            min-height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .stu-payment-modal {
            width: 100%;
            max-width: 800px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .stu-payment-modal h2 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #333;
        }

        .stu-payment-modal table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            overflow-x: auto;
        }

        .stu-payment-modal thead th {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: left;
        }

        .stu-payment-modal tbody td,
        .stu-payment-modal tfoot td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .stu-payment-modal tfoot td {
            font-weight: bold;
            background-color: #f1f1f1;
        }

        .stu-payment-print-btn {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .stu-payment-print-btn:hover {
            background-color: #218838;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .stu-payment-modal {
                padding: 15px;
            }

            .stu-payment-modal h2 {
                font-size: 18px;
            }

            .stu-payment-modal table {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .stu-payment-modal {
                padding: 10px;
            }

            .stu-payment-modal h2 {
                font-size: 16px;
            }

            .stu-payment-modal table {
                font-size: 12px;
            }

            .stu-payment-print-btn {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="stu-payment-container">
        <div class="stu-payment-modal">
            <h2>Tannu Priya Kumari HNIS23035</h2>
            <table>
                <thead>
                    <tr>
                        <th>Receipt No</th>
                        <th>Disc Amt</th>
                        <th>Net Paid</th>
                        <th>Date</th>
                        <th>Submitted By</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1105</td>
                        <td>0</td>
                        <td>5000</td>
                        <td>30-10-2023</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                    <tr>
                        <td>1107</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>28-11-2023</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                    <tr>
                        <td>1108</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>29-11-2023</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                    <tr>
                        <td>1109</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>06-12-2023</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                    <tr>
                        <td>1110</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>08-12-2023</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                    <tr>
                        <td>1111</td>
                        <td>0</td>
                        <td>1000</td>
                        <td>19-12-2023</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                    <tr>
                        <td>1113</td>
                        <td>0</td>
                        <td>500</td>
                        <td>04-01-2024</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                    <tr>
                        <td>1115</td>
                        <td>0</td>
                        <td>500</td>
                        <td>17-01-2024</td>
                        <td>admin@hypernetitsolutions.com</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><strong>Total (Rs.)</strong></td>
                        <td>11000</td>
                    </tr>
                </tfoot>
            </table>
            <button class="stu-payment-print-btn">Print</button>
        </div>
    </div>
</body>

</html>
