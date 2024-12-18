<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;
use App\Models\BlogPost;

class PostTest extends TestCase
{
    use RefreshDatabase;
    
    public function testNoBlogPostsWhenNothingInDatabase()
    {
        $response = $this->get("/posts");

        $response->assertSeeText("No Posts found!");
    }

    public function testSee1BlogPostWhenThereIs1()
    {
        //Arrange
        $post = new BlogPost();
        $post->title = 'New Title';
        $post->content = 'Content of the Blog Post';
        $post->save();

        //Act
        $response = $this->get('/posts');

        //Assert
        $response->assertSeeText('');

        $this->assertDatabaseHas('blog_posts',[
            'title' => 'New Title'
        ]);

    }

    public function testStoreValid()
    {
        $param = [
            'title' => 'Valid title',
            'content' => 'At least 10 characters'
        ];

        $this->post('/posts', $param)
            ->assertStatus(302)
            ->assertSessionHas('status');

        $this->assertEquals(session('status'),'The Blog post was created !!');
    }
}
