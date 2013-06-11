<?php 
global $MM_Roots;


?>

<div class="span3">
      <h4 class="main-color-line"><i class="icon-comment-alt main-color"></i> <span>Book With Us Today!</span></h4>
    <form class="form-vertical" id="mail">
    <div class="control-group">
      <label for="name"></label>
      <div class="controls">
      <input class="req" id="name" name="name" placeholder="your name" type="text">
      </div>
    </div>
    <div class="control-group">
      <label for="contact"></label>
      <div class="controls">
        <input class="req" id="contact" name="contact" placeholder="your phone # or email address" type="text">
      </div>
    </div>

    <div class="control-group">
      <label for="message"></label>
      <div class="controls">
        <textarea class="req" id="message" name="message" placeholder="help fix my car!!" rows="5"></textarea>
      </div>
    </div>
    <input type="text" name="terms" id="terms" />

    <script type="text/javascript">
        document.write('<input type="text" name="honey" value="1" id="honey" />');
      </script>

    <button class="btn btn-primary" id="send">Send message</button>
    </form>      
</div>