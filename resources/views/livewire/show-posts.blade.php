<div>
   <h2>show posts</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
               @foreach($posts as $post)
                <tr wire:key="{{$post->id}}">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <button type="button" wire:click="deletePost({{ $post->id }})" wire:confirm="Are you sure you want to delete this post?">
                            Delete
                        </button>
                    </td>
                </tr>
               @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Total Posts: 1</td>
            </tr>
        </tfoot>
    </table>
</div>
