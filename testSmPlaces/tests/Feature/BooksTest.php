<?php

namespace Tests\Feature;

use App\Models\Books;
use App\Models\TypeInterest;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class BooksTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * Test case Model fillable not defined
     */
    public function check_if_collumns_books_is_correct()
    {
        $books = new Books();
        $expected = [
            'title',
            'author',
            'type_interest_id',
            'user_id'
        ];

        $arraVerify = array_diff($expected, $books->getFillable());

        $this->assertEquals(0, count($arraVerify));
    }

    /**
     * @test
     * Test case post has expected data in the Model fillable
     */
    public function check_post_contain_data_correct()
    {
        $books = new Books();
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertIsInt($user->id);
        $this->assertGreaterThan(0, $user->id, 'Failed');
        $post = [
            'title'                 => 'Livro Test',
            'author'                => 'Author Test',
            'type_interest_id'      => 5,
            'user_id'               => $user->id,
        ];
        $this->assertEquals(array_values(array_keys($post)), array_values($books->getFillable()));
    }
}
