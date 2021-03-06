<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('lte/dist/img/acc.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Accounts Management</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('lte/dist/img/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item ">
                    <a href="{{route('home')}}" class="nav-link  {{ request()->is('dashboard') ? 'nav-link active' : null }}">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>

                  <li class="nav-item {{ request()->is('admin/coa*') || request()->is('admin/journals*') || request()->is('admin/journal/classic*') || request()->is('admin/ledger*') || request()->is('admin/trial-balance*') || request()->is('admin/profit-n-loss*') || request()->is('admin/balance-sheet*') ? 'nav-item active menu-open' : null }}">
                    <a href="javascript:" class="nav-link {{ request()->is('admin/coa/*') || request()->is('admin/journals*') || request()->is('admin/journal/classic*') || request()->is('admin/ledger*') || request()->is('admin/trial-balance*') || request()->is('admin/profit-n-loss*') || request()->is('admin/balance-sheet*') ? 'nav-item active menu-open' : null }}">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                          Accounts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('coa.index') }}" class="nav-link  {{ request()->is('admin/coa') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chart of Accounts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('journals.index') }}" class="nav-link  {{ request()->is('admin/journals') ? 'active' : null }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Journal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('journals.classic') }}" class="nav-link  {{ request()->is('admin/journal/classic') ? 'active' : null }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Journal Classic</p>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('accounts.ledger') }}" class="nav-link  {{ request()->is('admin/ledger') ? 'active' : null }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ledger</p>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('accounts.trialBalance') }}" class="nav-link  {{ request()->is('admin/trial-balance') ? 'active' : null }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Trial Balance</p>
                      </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('accounts.profitNLoss') }}" class="nav-link  {{ request()->is('admin/profit-n-loss') ? 'active' : null }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profit and Loss</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('accounts.balanceSheet') }}" class="nav-link  {{ request()->is('admin/balance-sheet') ? 'active' : null }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Balance Sheet</p>
                  </a>
              </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
