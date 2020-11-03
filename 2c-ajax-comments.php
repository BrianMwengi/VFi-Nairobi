<?php
 //include("path.php");
/* [INIT] */
//session_start();
require ("2a-config.php");
require ("2b-lib-comments.php");
$pdo = new Comments();

/* [HANDLE AJAX REQUESTS] */
switch ($_POST['req']) {
  /* [INVALID REQUEST] */
  default:
    //echo "ERR";
    break;

  /* [SHOW COMMENTS] */
  case "show":
    $comments = $pdo->get($_POST['post_id']);
    function show ($cid, $rid, $name, $time, $message, $indent = 0) { ?>
    <div class="ccomment<?= $indent ? " creply" : "" ?>">
      <div>
        <span class="cname"><?=$name?></span>
        <span class="ctime"><?=$time?></span>
      </div>
      <div class="cmessage"><?=$message?></div>
      <input type="button" class="reply" value="Reply" onclick="comments.reply(<?=$cid?>, <?=$rid?>)"/>
      <div id="reply-<?=$cid?>"></div>
    </div>
    <?php }
    if (is_array($comments)) { foreach ($comments as $c) {
      show($c['comment_id'], $c['comment_id'], $c['name'], $c['timestamp'], $c['message']);
      if (is_array($c['reply'])) { foreach ($c['reply'] as $r) {
        show($r['comment_id'], $c['comment_id'], $r['name'], $r['timestamp'], $r['message'], 1);
      }}
    }}
    break;

  /* [SHOW REPLY FORM] */
  case "reply": ?>
    <form onsubmit="return comments.add(this)" class="p-5 bg-light">
      <h3 class="mb-5">Leave a comment</h3>
      <input type="hidden" name="reply_id" value="<?=$_POST['reply_id']?>"/>
      <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Name" required/>
      </div>
      <div class="form-group">
      <textarea name="message" class="form-control" placeholder="Message" required></textarea>
      </div>
      <input type="submit" class= "btn py-3 px-4 btn-primary" value="Post Comment"/>
    </form>
    <?php break;

  /* [ADD COMMENT] */
  case "add":
    echo $pdo->add($_POST['post_id'], $_POST['name'], $_POST['message'], $_POST['reply_id']) ? "OK" : "ERR";
    break;
}
?>