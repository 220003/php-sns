<div class="tweet-nav mb-3">
    <!-- TODO: usersのIDと tweetsのIDを送信 -->
    <form action="" method="">
        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
        <input type="hidden" name="tweet_id" value="<?= $tweet['id'] ?>">

        <?php if (in_array($tweet['id'], $user_likes)) : ?>
            <!-- ユーザーがいいねをしている場合 -->
            <button class="btn btn-sm"><img src="../images/svg/heart_active.svg"></button>
            <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
        <?php else : ?>
            <!-- ユーザーがいいねをしていない場合 -->
            <button class="btn btn-sm"><img src="../images/svg/heart.svg"></button>
            <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
        <?php endif ?>
    </form>
</div>