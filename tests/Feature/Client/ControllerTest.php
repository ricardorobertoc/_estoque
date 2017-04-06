<?php


namespace Tests\Feature;

use Domain\User\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ControllerTest extends TestCase
{

  public function testCreate()
  {
    $user = factory(User::class)->create();

    $name = 'Leandro Henrique';
    $data = [
      'name' => $name
    ];

    $response = $this->post('client', $data);

    $response->assertStatus(200);
    $response->assertJson([
      'name' => $name
    ]);

    //assertDatabaseHas
    /**$response->assertDatabaseHas('Clients', [
      'name' => $name
    ]);**/
  }
}
