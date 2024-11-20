<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/basic.css">
    <link rel="stylesheet" href="styles/new-patient.css">
</head>

<body>
    <div class="new-patient-container">
        <div style="display: flex;">
            <a style="z-index: 1000;cursor: pointer;height: 48px;" href="index"><img style="padding: 10px 10px;height: 28px;"src="assets/icons/back.svg" alt="" srcset=""></a>
            <span class="new-patient-container-dialog">Enter Patient Details</span>
        </div>
        <div>
            <form style="padding: 20px;font-size: 22px;font-family: thin;" action="" method="post">
                <div style="display: inline-block; width: 50%;">
                    <!-- Patient ID -->
                    <div style="margin: 12px 0px;">
                        <span style="display: block;font-size: 14px;">Patient ID</span>
                        <input style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px;font-size: 14px;font-family: medium;" placeholder="000-000-0000" type="text" autofocus>
                    </div>
                    <!-- Date Of Birth -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">Date Of Birth</span>
                            <div>
                                <input
                                    style="padding: 5px 8px;margin-top: 6px;border: none;border-radius: 4px;font-size: 14px;font-family: medium;display: inline-block;"
                                    type="date">
                            </div>
                        </div>
                    </div>
                    <!-- HbA1C -->
                    <div style="margin: 12px 0px;display: flex;justify-content: space-between;padding-right: 10%;">
                        <div>
                            <span style="display: block;font-size: 14px;">HbA1C</span>
                            <div style="position: relative;">
                                <input style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 52px;" placeholder="0.0" type="number" step="0.01">
                                <span style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 32px;line-height: 30px;border-left: 1px solid #00000040;">%</span>
                            </div>
                        </div>
                        <div>
                            <span style="display: block;font-size: 14px;">HbA1C Test Date</span>
                            <div>
                                <input style="padding: 5px 8px;margin-top: 6px;border: none;border-radius: 4px;font-size: 14px;font-family: medium;display: inline-block;" type="date">
                            </div>
                        </div>
                    </div>
                    <!-- Height -->
                    <div style="margin: 12px 0px;display: flex;justify-content: space-between;padding-right: 25%;">
                        <div>
                            <span style="display: block;font-size: 14px;">Height</span>
                            <div style="position: relative;">
                                <input
                                    style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 52px;"
                                    placeholder="0" type="number">
                                <span
                                    style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 32px;line-height: 30px;border-left: 1px solid #00000040;">ft</span>
                            </div>
                        </div>
                        <div style="width: 101px;">
                            <div style="position: relative;">
                                <span style="display: block;font-size: 14px;color: transparent;">.</span>
                                <input
                                    style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 52px;"
                                    placeholder="0" type="number">
                                <span
                                    style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 32px;line-height: 30px;border-left: 1px solid #00000040;">in</span>
                            </div>
                        </div>
                    </div>
                    <!-- Weight -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">Weight</span>
                            <div style="position: relative;">
                                <input
                                    style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 52px;"
                                    placeholder="0.0" type="number" step="0.01">
                                <span
                                    style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 32px;line-height: 30px;border-left: 1px solid #00000040;">Kg</span>
                            </div>
                        </div>
                    </div>
                    <!-- Hypokalemia -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">Hypokalemia (Lab Value)</span>
                            <div style="position: relative;">
                                <input style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 52px;" placeholder="0.0" type="number" step="0.01">
                                <span style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 74px;line-height: 30px;border-left: 1px solid #00000040;">mmol/L</span>
                            </div>
                        </div>
                    </div>
                    <!-- POC BG -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">POC Blood Glucose</span>
                            <div style="position: relative;">
                                <input style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 64px;" placeholder="0.0" type="number" step="0.01">
                                <span style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 68px;line-height: 30px;border-left: 1px solid #00000040;">mg/dL</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin: 12px 0px;float: right; width: 50%;">
                    <!-- Checkboxes -->
                    <div style="display: block;">
                        <label class="checkbox-container">Patient Takes Insulin
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">Patient Takes Medications
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">Pregnant
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">Hemodialysis
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <!-- Blood Pressure -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">Blood Pressure</span>
                            <div style="position: relative;">
                                <input style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 56px;" placeholder="00/00" type="text" step="0.01">
                                <span style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 68px;line-height: 30px;border-left: 1px solid #00000040;">mm/Hg</span>
                            </div>
                        </div>
                    </div>
                    <!-- Pulse -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">Pulse/HR</span>
                            <div style="position: relative;">
                                <input style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 56px;" placeholder="00" type="number" >
                                <span style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 62px;line-height: 30px;border-left: 1px solid #00000040;">BPM</span>
                            </div>
                        </div>
                    </div>
                    <!-- Temp -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">Body Temperature</span>
                            <div style="position: relative;">
                                <input style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px 0px 0px 4px;font-size: 14px;font-family: medium;display: inline-block;width: 56px;" placeholder="0.0" type="number" step="0.01">
                                <span style="border: none;border-radius: 0px 4px 4px 0px;font-size: 14px;font-family: medium;background-color: #fff;color: #000;height: 30px;display: inline-block;position: absolute;bottom: 0;text-align: center;width: 38px;line-height: 30px;border-left: 1px solid #00000040;">°F</span>
                            </div>
                        </div>
                    </div>
                    <!-- Notes -->
                    <div style="margin: 12px 0px;">
                        <div>
                            <span style="display: block;font-size: 14px;">Note</span>
                            <div style="position: relative;">
                                <textarea style="padding: 6px 8px;margin-top: 6px;border: none;border-radius: 4px;font-size: 14px;font-family: medium;display: inline-block;" placeholder="Notes" cols="20" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Submit -->
                    <div>
                        <button class="new-patient-submit" type="submit">Proceed</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>