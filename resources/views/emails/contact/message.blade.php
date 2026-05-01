@component('mail::message')
    # New Contact Enquiry

    You have received a new message from the website contact form.

    ---

    **Name:** {{ $data['name'] }}
    **Email:** {{ $data['email'] }}
    **Phone:** {{ $data['phone'] ?? 'Not provided' }}
    **Subject:** {{ $data['subject'] }}

    ---

    ## Message

    {{ $data['message_body'] }}

    ---

    **Reply to:** {{ $data['email'] }}

    Regards,
    {{ config('app.name') }}
@endcomponent
