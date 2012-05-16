<div id="email-form">
    <form>
        <label>Your email address:</label>
        <br />
        <input type="text" style="width:100%" class="form-email" name="email"/>
        <br /><br />
        <textarea class="form-message" name="message">Your Message</textarea>
        <br /><br />
        <input type="Submit" value="Submit" />
    </form>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".form-message").click(function(){
        $(this).html('');
    });
});
</script>
