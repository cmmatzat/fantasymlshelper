<?php
  foreach ($schedule as $round) : ?>
  <div class="container flexcol-jst">
    <div class="round flexrow-wr flex-grow">
      <div class="round-header flex-grow">ROUND <?php echo $round['round']; ?></div>
    <?php foreach ($round['matches'] as $match) : ?>
      <div class="match flex-strict flexcol-jst">
        <div class="match-date flex-strict <?php echo $match['time']['day_of_week'] ?>"><?php echo $match['time']['date']; ?></div>
        <div class="match-body flex-grow flexcol-jse">
          <div class="match-time flex-strict"><?php echo $match['time']['time']; ?></div>
          <div class="match-img-box flex-grow flexrow">
            <img class="flex-strict" src="https://d1j2t3dnax9fm.cloudfront.net/media/mls_mls/squads/logos/<?php echo $match['home_squad']['id'] ?>.png" alt="<?php echo $match['home_squad']['short_name'] ?>">
            <div class="flex-strict">v</div>
            <img class="flex-strict" src="https://d1j2t3dnax9fm.cloudfront.net/media/mls_mls/squads/logos/<?php echo $match['away_squad']['id'] ?>.png" alt="<?php echo $match['away_squad']['short_name'] ?>">
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
<?php endforeach; ?>