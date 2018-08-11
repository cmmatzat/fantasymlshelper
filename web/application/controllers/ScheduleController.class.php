<?php

class ScheduleController extends Controller
{
  private $scheduleUrl = 'https://data.fantasymlshelper.com/data/schedule/schedule.json';
  private $schedule;

  public function __construct()
  {
    parent::__construct();
    $this->schedule = $this->getScheduleData();
  }

  // Show the full year schedule
  public function index($args = false)
  {
    $pageCss = CSS_PATH . 'schedule.css';
    $secondaryNav = false;
    $content = VIEW_PATH . 'schedule.php';
    $schedule = $this->schedule;

    require($this->templates['header']);
    require($this->templates['navbar']);
    require($this->templates['body']);
  }

  // Show the given season schedule
  // TODO: Add error checking on args
  public function season($args = false)
  {
    $pageCss = CSS_PATH . 'schedule.css';
    $secondaryNav = false;
    $content = VIEW_PATH . 'schedule.php';
    $season = strtolower($args[0]);
    if (($season == NULL) || !(($season == 'fall') || ($season == 'spring')))
    {
      $round = $this->getCurrentRound($this->schedule);
      $season = $round[0]['season'];
    }
    
    $schedule = $this->getSeasonSchedule($season, $this->schedule);
    
    require($this->templates['header']);
    require($this->templates['navbar']);
    require($this->templates['body']);
  }

  // Show the given round schedule
  public function round($args = false)
  {
    $pageCss = CSS_PATH . 'schedule.css';
    $secondaryNav = false;
    $content = VIEW_PATH . 'schedule.php';

    if (($args[0] != NULL) && ($args[0] > 0) && ($args[0] < 36))
    {
      $schedule = $this->getRoundSchedule($args[0], $this->schedule;
    }
    else
    {
      $schedule = $this->getCurrentRound($this->schedule);
    }
    
    require($this->templates['header']);
    require($this->templates['navbar']);
    require($this->templates['body']);
  }

  private function getScheduleData()
  {
    $curl_obj = curl_init();
    curl_setopt($curl_obj, CURLOPT_URL, $this->scheduleUrl);
    curl_setopt($curl_obj, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_obj, CURLOPT_CONNECTTIMEOUT, 5);
    $schedule = curl_exec($curl_obj);
    curl_close($curl_obj);
    return json_decode($schedule, true);
  }

  private function getSeasonSchedule($season, $fullSchedule)
  {
    $seasonSchedule = array();
    foreach ($fullSchedule as $round)
    {
      if ($round['season'] == $season)
      {
        $seasonSchedule[] = $round;
      }
    }

    return $seasonSchedule;
  }

  private function getRoundSchedule($roundNum, $fullSchedule)
  {
    // Cannot return individual round, must be in an array
    $roundSchedule = array();
    foreach ($fullSchedule as $round)
    {
      if ($round['round'] == $roundNum)
      {
        $roundSchedule[] = $round;
      }
    }

    return $roundSchedule;
  }

  private function getCurrentRound($schedule)
  {
    $roundSchedule = array();
    foreach ($fullSchedule as $round)
    {
      if ($round['status'] != "complete")
      {
        $roundSchedule[] = $round;
        break;
      }
    }

    return $roundSchedule;
  }

}

?>