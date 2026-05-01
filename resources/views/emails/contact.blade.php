<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Enquiry – Aurora Oil and Gas Ltd</title>
</head>

<body style="margin:0;padding:0;background-color:#f4f6f9;font-family:Arial,Helvetica,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f9;padding:30px 0;">
<tr>
<td align="center">

<table width="600" cellpadding="0" cellspacing="0"
       style="background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.08);">

    <!-- Header -->
    <tr>
        <td style="background:#0d2c4a;padding:25px;text-align:center;">
            <h2 style="color:#ffffff;margin:0;font-size:22px;letter-spacing:1px;">
                AURORA OIL AND GAS LTD
            </h2>
            <p style="color:#cbd6e2;margin:5px 0 0 0;font-size:13px;">
                Energy Development • Trading • Advisory
            </p>
        </td>
    </tr>

    <!-- Body -->
    <tr>
        <td style="padding:30px;">

            <h3 style="margin-top:0;color:#0d2c4a;font-size:18px;">
                New Website Enquiry
            </h3>

            <p style="color:#6c757d;font-size:14px;margin-bottom:25px;">
                A new enquiry has been submitted via the Aurora Oil and Gas website.
            </p>

            <!-- Details -->
            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;font-size:14px;">

                <tr>
                    <td style="background:#f8f9fa;font-weight:bold;width:160px;">Name</td>
                    <td>{{ $data['name'] }}</td>
                </tr>

                <tr>
                    <td style="background:#f8f9fa;font-weight:bold;">Email</td>
                    <td>{{ $data['email'] }}</td>
                </tr>

                <tr>
                    <td style="background:#f8f9fa;font-weight:bold;">Phone</td>
                    <td>{{ $data['phone'] }}</td>
                </tr>

                @if(!empty($data['company']))
                <tr>
                    <td style="background:#f8f9fa;font-weight:bold;">Company</td>
                    <td>{{ $data['company'] }}</td>
                </tr>
                @endif

                <tr>
                    <td style="background:#f8f9fa;font-weight:bold;">Subject</td>
                    <td>{{ $data['subject'] }}</td>
                </tr>

                <tr>
                    <td style="background:#f8f9fa;font-weight:bold;">Location</td>
                    <td>{{ $data['location'] }}</td>
                </tr>

            </table>

            <!-- Message -->
            <div style="margin-top:30px;">
                <h4 style="color:#0d2c4a;margin-bottom:10px;font-size:16px;">
                    Enquiry Details
                </h4>

                <div style="background:#f8f9fa;padding:15px;border-radius:6px;font-size:14px;line-height:1.6;color:#333;">
                    {!! nl2br(e($data['message_body'])) !!}
                </div>
            </div>

            <!-- Consent -->
            <p style="margin-top:25px;font-size:12px;color:#6c757d;">
                ✔ User has consented to be contacted regarding this enquiry.
            </p>

        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td style="background:#f4f6f9;padding:20px;text-align:center;font-size:12px;color:#6c757d;">
            <p style="margin:0;">
                Aurora Oil and Gas Ltd
            </p>
            <p style="margin:5px 0 0 0;">
                Registered in England & Wales • Company No. 16379620
            </p>
            <p style="margin:5px 0 0 0;">
                www.auroraoilandgas.com
            </p>
        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>