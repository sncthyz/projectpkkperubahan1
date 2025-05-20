<div class="sidebar">
      <!-- Tombol navigasi -->
      <button>
        <span>➕</span>
        <a href="{{ route('postpublish') }}" style="text-decoration: none; color: black"
          >Publish Your Idea</a
        >
      </button>
      <button class="active" href="{{ route('group') }}">
        <span>👥</span
        ><a href="{{ route("group") }}" style="text-decoration: none; color: black">
          Group</a
        >
      </button>
      <button href="{{ route('editp') }}">
        <span>✏️</span>
        <a href="{{ route('editp') }}" style="text-decoration: none; color: black"
          >Edit</a
        >
      </button>
      <button href="{{ route('setting') }}">
        <span>⚙️</span>
        <a href="{{ route('setting') }}" style="text-decoration: none; color: black"
          >Settings</a
        >
      </button>
      <button href="#">
        <span>🔓</span>
        <a href="#" style="text-decoration: none; color: black"
          >Log In</a
        >
      </button>
      <!-- Tombol premium di paling bawah -->
      <div class="premium-btn" href="{{ route('pro') }}">
        👑
        <a
          href="{{ route('pro') }}"
          style="text-decoration: none; color: white"
          >Upgrade to Premium</a
        >
      </div>
    </div>