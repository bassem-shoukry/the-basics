<div>
   <h2>Create Post</h2>
    <form wire:submit.prevent="createPost">
        <div>
            <label for="title">Title</label>
            <input type="text" wire:model="title" id="title">
            @error('title') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="content">Content</label>
            <textarea wire:model="content" id="content"></textarea>
            @error('content') <span>{{ $message }}</span> @enderror
        </div>
        <button type="submit">Create Post</button>
    </form>
</div>
