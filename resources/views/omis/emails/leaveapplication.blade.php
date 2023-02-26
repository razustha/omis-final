<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{!! env('APP_NAME') !!}</title>
</head>

<body>
    <table border="0"
        style="width:100%; background:#ebebeb; padding:30px 0; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:1.6">
        <tr>
            <td>
                <table border="0" style="padding-bottom:15px ; width:90%; margin:auto">
                    <tr style=" padding-bottom:15px; width:80%; margin:auto">
                        <td><a href="#"><img
                                    src="https://omis.bibhuti.net/user-uploads/app-logo/8869fdc1cd2ad3158075f30f8e636c57.png"
                                    style="width:250px;"></a></td>
                    </tr>
                </table>

                <table border="0" style="background:#fff; padding:20px; width:90%; margin:auto">
                    <tr>
                        <td style=" padding-bottom:20px;">
                            <table width='100%'>
                                <tr>
                                    <td>
                                        To,<br>
                                        {{ $mail_data['manager_name'] }}<br>

                                        <br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Dear Sir/Madam,<br />

                                        <table>
                                            <tr>
                                            <td style="display:block">{{$mail_data['remarks']}}</td><br>
                                           <td style="display:block;"><b>Leave From: {{$mail_data['leaveStart']}} - {{$mail_data['leaveEnd']}}</b></td>
                                           <td style="display:block"><b>Leave Type: {{$mail_data['leavetype_id']}}</b></td>
                                           <td style="display:block">Your's Sincerely</td>
                                           <td style="display:block">{{$mail_data['name']}}</td>
                                           </tr>
                                        </table>

                                    </td>
                                </tr>


                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
