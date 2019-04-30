<h3>Subject: {{$contact['subject']}}</h3>
<h3>Message:</h3>

<blockquote>
    {!! nl2br($contact['message']) !!}
</blockquote>
<br>
<code>
    This message was sent by:<br>
    Name: {{$contact['name']}}<br>
    Email: {{$contact['email']}}<br>
    Phone No: {{$contact['phone_no']}}
</code>

