<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
<form method="post" action="sendemail">
    @csrf
    <input type="text" name="to" placeholder="enter email"><br>
        <input type="text" name="subject" placeholder="enter subject"><br>

 <textarea name="message" placeholder="enter msg" rows="4" cols="50"></textarea><br>

<button>send email</button>

</form>