<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

use App\Models\User;
use App\Models\Institutions;


class InstitutionsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @return void
     */
    public function testCanReadListOfInstitutions()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $institutionOne = Institutions::factory()->create();
        $institutionTwo = Institutions::factory()->create();
        $response = $this->actingAs($user)->get('/institutions');
        $response->assertSee($institutionOne->title)
        ->assertSee($institutionOne->content)
        ->assertSee($institutionTwo->title)
        ->assertSee($institutionTwo->content);
    }

    /**
     * @return void
     */
    public function testCanReadSingleInstitution()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $institution = Institutions::factory()->create();
        $response = $this->actingAs($user)->get('/institutions/' . $institution->id );
        $response->assertSee($institution->title)->assertSee($institution->content);
    }

    /**
     * @return void
     */
    public function testCanOpeniIstitutionCreateForm()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $institution = Institutions::factory()->create();
        $response = $this->actingAs($user)->get('/institutions/create');
        $response->assertSee('Create Institution');
    }

    /**
     * @return void
     */
    public function testCanCreateNewNinstitution()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $institution = Institutions::factory()->create();
        $response = $this->actingAs($user)->post('/institutions',  $institution->toArray());
        $this->assertDatabaseHas('institutions',['title' => $institution->title, 'content' => $institution->content]);
    }

    /**
     * @return void
     */
    public function testCanOpenInstitutionEdition()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $institution = Institutions::factory()->create();
        $response = $this->actingAs($user)->get('/institutions/'.$institution->id . '/edit');
        $response->assertSee($institution->title)->assertSee($institution->content);
    }

    /**
     * @return void
     */
    public function testCanEditInstitution()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $institution = Institutions::factory()->create();
        $institution->title = 'Updated title';
        $institution->content = 'Updated content';
        $this->actingAs($user)->put('/institutions/'.$user->id, $institution->toArray());
        $this->assertDatabaseHas('institutions',['id'=> $institution->id , 'title' => 'Updated title', 'content' => 'Updated content']);
    }

    /**
     * @return void
     */
    public function testCanDeleteInstitution()
    {
        $user = User::factory()->create();
        $roleUser = Role::create(['name' => 'user']);
        $user->assignRole($roleUser);
        $institution = Institutions::factory()->create();
        $this->actingAs( $user );
        $this->delete('/institutions/'.$institution->id);
        $this->assertDatabaseMissing('institutions',['id'=> $institution->id]);
    }
}
