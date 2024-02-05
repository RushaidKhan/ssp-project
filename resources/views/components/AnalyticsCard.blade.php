    <div class="CustomerDashboardAnalyticsWrapper">
        <h1>Welcome, {{ auth()->user()->name}} !</h1>
        <h2>Member since: <span>{{ \Carbon\Carbon::parse(Auth()->user()->created_at)->format('jS F Y') }}</span></h2>
    </div>
