<?php

namespace Laravel\Lumen\Testing;

trait DatabaseMigrations
{
    /**
     * Run the dabase migrations for the application.
     *
     * @return void
     */
    public function runDatabaseMigrations()
    {
        $this->artisan('migrate');

        $this->beforeApplicationDestroyed(function () {
            $this->artisan('migrate:rollback');
        });
    }
}
