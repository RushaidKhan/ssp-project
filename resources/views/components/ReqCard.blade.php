<div class="CustomerListReqCard">
    <h3>Requested hotel: {{$request->venue->name}}</h3>
    <h3>Requested date: {{$request->requested_date}}</h3>
    <h3>Status:
        @if ($request->status === 'pending')
            <span class="CustomerPending">Pending</span>
        @elseif ($request->status === 'accepted')
            <span class="CustomerAccepted">Accepted</span>
        @elseif ($request->status === 'declined')
            <span class="CustomerDeclined">Declined</span>
        @endif
    </h3>

</div>
