<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/basic.css">
    <link rel="stylesheet" href="styles/existing-patient.css">
</head>

<body>
    <div class="home-container">
        <div style="display: flex;">
            <a style="z-index: 1000;cursor: pointer;height: 48px;" href="index"><img style="padding: 10px 10px;height: 28px;" src="assets/icons/back.svg" alt="" srcset=""></a>
            <span class="existing-patient-container-dialog">Enter Patient Details</span>
        </div>
        <div>
            <form style="margin-top: 38px; padding: 20px;font-size: 22px;font-family: thin;" action="" method="post">
                <!-- Patient ID -->
                <div style="margin: 12px 0px;">
                    <span style="display: block;font-size: 14px;">Patient ID</span>
                    <input
                        style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px;font-size: 14px;font-family: medium;width: -webkit-fill-available;"
                        placeholder="000-000-0000" type="text" autofocus>
                </div>
                <!-- Submit -->
                <div>
                    <button class="existing-patient-submit" type="submit">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>