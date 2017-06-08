import {Component, OnInit} from "@angular/core";
import {ActivatedRoute, Params} from "@angular/router";
import {Observable} from "rxjs";
import {PostService} from "../services/post.service";
import {Post} from "../classes/post";
import {Status} from "../classes/status";

@Component({
	templateUrl: "./templates/posts.php"
})

export class PostsComponent implements OnInit {

	newPost : Post = new Post(null, null, null, null);
	posts : Post[] = [];
	status : Status = new Status(null, null, null);

	constructor(private postService : PostService) {}

	ngOnInit() : void {
		this.getAllPosts();
	}

	createPost() : void {
		this.postService.createPost(this.newPost)
			.subscribe(status => this.status = status);
	}

	getAllPosts() : void {
		this.postService.getAllPosts()
			.subscribe(posts => this.posts = posts);
	}
}
