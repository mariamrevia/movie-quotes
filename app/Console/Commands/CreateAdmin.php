<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $name = 'create:admin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create an admin user';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$email = $this->ask('What is your email?');
		$password = $this->secret('What is the password?');

		$admin = new User();
		$admin->name = 'Admin';
		$admin->email = $email;
		$admin->password = bcrypt($password);
		$admin->save();

		$this->info('Admin user created successfully.');
	}
}
