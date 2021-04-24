<div class="col-md-3 col-xl-2">
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>メニュー</span>
    </h6>
    <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            ホーム <span class="sr-only">(現在位置)</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('task') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            タスク
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('category') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 13 16 13 14 16 10 16 8 13 2 13"></polyline><path d="M5.47 5.19L2 13v5a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5l-3.47-7.81A2 2 0 0 0 16.7 4H7.3a2 2 0 0 0-1.83 1.19z"></path></svg>
            カテゴリ設定
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('color') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
            配色設定
        </a>
        </li>
    </ul>
    </div>
</nav>
</div>