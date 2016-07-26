<?php

/**
 * Created by IntelliJ IDEA.
 * User: Michael
 * Date: 15.07.2016
 * Time: 17:37
 */

declare(strict_types=1);

/**
 * Class Event
 * Stores event information
 */
class Event
{
	/**
	 * The event ID
	 *
	 * @var int
	 */
	public $id;

	/**
	 * The event title
	 *
	 * @var string
	 */
	public $title;

	/**
	 * The event description
	 *
	 * @var string
	 */
	public $description;

	/**
	 * The event start time
	 *
	 * @var
	 */
	public $start;

	/**
	 * The event end time
	 *
	 * @var
	 */
	public $end;

	/**
	 * Event constructor.
	 * Accepts an array of event data and stores it
	 *
	 * @throws string when no event is given
	 * @param $event
	 * @return void
	 */
	public function __construct($event=NULL)
	{
		if(is_array($event)){
			$this->id = $event['event_id'];
			$this->title = $event['event_title'];
			$this->description = $event['event_desc'];
			$this->start = $event['event_start'];
			$this->end = $event['event_end'];
		}else{
			$this->id = NULL;
			$this->title = "";
			$this->description = "";
			$this->start = "";
			$this->end = "";
		}
	}
}