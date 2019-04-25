<?php
/**
 * HomeSrv
 *
 *
 *
 * @author Luuray
 * @copyright Rainhan System
 * @id $
 *
 * Copyright (c) 2010-2019, Rainhan System
 * Site: www.rainhan.net/?proj=HomeSrv
 */

namespace Luuray\Laravel\RabbitMQ;


use Illuminate\Contracts\Queue\Queue;

class RabbitMQQueue implements Queue
{
	/**
	 * Get the size of the queue.
	 *
	 * @param string $queue
	 *
	 * @return int
	 */
	public function size($queue = null)
	{
		// TODO: Implement size() method.
	}

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string|object $job
	 * @param mixed $data
	 * @param string $queue
	 *
	 * @return mixed
	 */
	public function push($job, $data = '', $queue = null)
	{
		// TODO: Implement push() method.
	}

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string $queue
	 * @param string|object $job
	 * @param mixed $data
	 *
	 * @return mixed
	 */
	public function pushOn($queue, $job, $data = '')
	{
		// TODO: Implement pushOn() method.
	}

	/**
	 * Push a raw payload onto the queue.
	 *
	 * @param string $payload
	 * @param string $queue
	 * @param array $options
	 *
	 * @return mixed
	 */
	public function pushRaw($payload, $queue = null, array $options = [])
	{
		// TODO: Implement pushRaw() method.
	}

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param \DateTimeInterface|\DateInterval|int $delay
	 * @param string|object $job
	 * @param mixed $data
	 * @param string $queue
	 *
	 * @return mixed
	 */
	public function later($delay, $job, $data = '', $queue = null)
	{
		// TODO: Implement later() method.
	}

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param string $queue
	 * @param \DateTimeInterface|\DateInterval|int $delay
	 * @param string|object $job
	 * @param mixed $data
	 *
	 * @return mixed
	 */
	public function laterOn($queue, $delay, $job, $data = '')
	{
		// TODO: Implement laterOn() method.
	}

	/**
	 * Push an array of jobs onto the queue.
	 *
	 * @param array $jobs
	 * @param mixed $data
	 * @param string $queue
	 *
	 * @return mixed
	 */
	public function bulk($jobs, $data = '', $queue = null)
	{
		// TODO: Implement bulk() method.
	}

	/**
	 * Pop the next job off of the queue.
	 *
	 * @param string $queue
	 *
	 * @return \Illuminate\Contracts\Queue\Job|null
	 */
	public function pop($queue = null)
	{
		// TODO: Implement pop() method.
	}

	/**
	 * Get the connection name for the queue.
	 *
	 * @return string
	 */
	public function getConnectionName()
	{
		// TODO: Implement getConnectionName() method.
	}

	/**
	 * Set the connection name for the queue.
	 *
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setConnectionName($name)
	{
		// TODO: Implement setConnectionName() method.
	}

}