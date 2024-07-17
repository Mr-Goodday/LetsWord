<?php 
    // session_start();

    // $startTime = null;

    // $countUpDate = time();

    // $now = time();
    // $time = $now - $countUpdate;

    // $hours = (int)($time / 60 / 60);
    // $minutes = (int)($time / 60) - $hours * 60;
    // $seconds = (int)$time - $hours * 60 * 60 - $minutes * 60;
    // $timeShow = ($hours == 0 ? "00" : ($hours < 10 ? "0".$hours : $hours)).":"
    // .($minutes == 0 ? "00" : ($minutes < 10 ? "0".$minutes : $minutes)).":"
    // .($seconds == 0 ? "00" : ($seconds < 10 ? "0".$seconds : $seconds));

    // $_SESSION['timeShow'] = $timeShow;
    
    // // $t = new Timer(); // echoes "Working, please wait.."

    // // unset($t);  // echoes "Job finished in h:m:s"

//=====================================================================================

    // $w2 = new EvTimer(2, 1, function ($w) {
    //     echo "is called every second, is launched after 2 seconds\n";
    //     echo "iteration = ", Ev::iteration(), PHP_EOL;
    
    //     // Stop the watcher after 5 iterations
    //     Ev::iteration() == 5 and $w->stop();
    //     // Stop the watcher if further calls cause more than 10 iterations
    //     Ev::iteration() >= 10 and $w->stop();
    // });

//=====================================================================================

class Timer {

    var $classname = "Timer";
    var $start     = 0;
    var $stop      = 0;
    var $elapsed   = 0;
 
    # Constructor
    function Timer( $start = true ) {
       if ( $start )
          $this->start();
    }
 
    # Start counting time
    function start() {
       $this->start = $this->_gettime();
    }
 
    # Stop counting time
    function stop() {
       $this->stop    = $this->_gettime();
       $this->elapsed = $this->_compute();
    }
    
    # Get Elapsed Time
    function elapsed() {
       if ( ! $this->elapsed )
          $this->stop();
 
       return $this->elapsed;
    }
    
    # Resets Timer so it can be used again
    function reset() {
       $this->start   = 0;
       $this->stop    = 0;
       $this->elapsed = 0;
    }
 
    #### PRIVATE METHODS ####
    
    # Get Current Time
    function _gettime() {
       $mtime = microtime();
       $mtime = explode( " ", $mtime );
       return $mtime[1] + $mtime[0];
    }
    
    # Compute elapsed time
    function _compute() {
       return $this->stop - $this->start;
    }
 }
?>