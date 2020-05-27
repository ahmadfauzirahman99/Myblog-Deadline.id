<li>
    <a href="{{ url('admin/posts') }}">
        <i class="mdi mdi-postage-stamp"></i>
        <span>Posts</span>
    </a></li>

<li><a href="{{ url('admin/categories') }}">
        <i class="mdi mdi-view-list"></i>
        <span>Categories</span>
    </a></li>
<li>
    <a href="{{ url('admin/comments') }}">
        <i class="mdi mdi-comment"></i>
        <span>Comments</span>
    </a></li>
<li>
    <a href="{{ url('admin/tags') }}">
        <i class="mdi mdi-tag"></i>
        <span>Tags</span>
    </a>
</li>

@if (Auth::user()->is_admin)
    <li><a href="{{ url('admin/users') }}">
            <i class="fa fa-user"></i>
            <span>Users</span>
        </a></li>
@endif
