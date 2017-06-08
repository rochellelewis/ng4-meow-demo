import {Component, OnInit} from "@angular/core";
import {ActivatedRoute, Params} from "@angular/router";
import {Observable} from "rxjs";
import {PostService} from "../services/post.service";
import {Post} from "../classes/post";

@Component({
	templateUrl: "./templates/posts.php"
})

export class PostsComponent implements OnInit {

	posts : Post[] = [];

	constructor(private postService : PostService) {}

	ngOnInit() : void {
		this.getAllPosts();
	}

	getAllPosts() : void {
		this.postService.getAllPosts()
			.subscribe(posts => this.posts = posts);
	}
}
