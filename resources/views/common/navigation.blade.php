    @extends('layouts/main')

    @section('content')

    <div class='navigation'>
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ0My4wMTcgMzk3LjIwNGMtMjguNzM3LTgxLjc0NS01OS4zNjgtMTcxLjIwMy0xODcuMDE3LTE3MS4yMDMtNTYuODk4IDAtOTkuNTY3IDE3LjkwOS0xMzAuNDQ2IDU0Ljc1MS0yNy4zNTIgMzIuNjM0LTQyLjIwNyA3NS41OTMtNTYuNTcxIDExNi40NTItMTcuNjU0IDUwLjA3MyAyNS43NzQgMTAwLjY0MyA3OC4yMTIgOTAuNTcgNDMuMDIyLTguMjc0IDEwMi4xMS0yMi4yMTQgMTg2LjU2Mi01Ljk3MSAzMi41NDYgNi4yNTkgMzUuNTcgNy4yNTQgNDQuNDE5IDcuMjU0IDQ2LjIyNy0uMDAyIDgwLjk1Ny00Ni4xNCA2NC44NDEtOTEuODUzeiIgZmlsbD0iIzQ1N2I4YiIgZGF0YS1vcmlnaW5hbD0iI2ZmNDA1YyIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGQ9Im0zNzguMTc3IDQ4OS4wNTdjNDYuMjI2LS4wMDIgODAuOTU2LTQ2LjE0MSA2NC44MzktOTEuODU0LTI4LjczNi04MS43NDQtNTkuMzY3LTE3MS4yMDItMTg3LjAxNi0xNzEuMjAydjI0OC4zNmM2My45MzkgMCAxMDEuMzY3IDE0LjY5NiAxMjIuMTc3IDE0LjY5NnoiIGZpbGw9IiM0OGE0YjMiIGRhdGEtb3JpZ2luYWw9IiNjMzAwNDciIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJtMjk2IDM0Mi45MWgtMjV2LTI1YzAtOC4yODQtNi43MTYtMTUtMTUtMTVzLTE1IDYuNzE2LTE1IDE1djI1aC0yNWMtOC4yODQgMC0xNSA2LjcxNi0xNSAxNXM2LjcxNiAxNSAxNSAxNWgyNXYyNWMwIDguMjg0IDYuNzE2IDE1IDE1IDE1czE1LTYuNzE2IDE1LTE1di0yNWgyNWM4LjI4NCAwIDE1LTYuNzE2IDE1LTE1cy02LjcxNi0xNS0xNS0xNXoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiNlMWYzZmYiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJtMjcxIDM5Ny45MXYtMjVoMjVjOC4yODQgMCAxNS02LjcxNiAxNS0xNXMtNi43MTYtMTUtMTUtMTVoLTI1di0yNWMwLTguMjg0LTYuNzE2LTE1LTE1LTE1djExMGM4LjI4NCAwIDE1LTYuNzE2IDE1LTE1eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iI2IxZDVmMSIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGQ9Im00NTYgMTUwLjkxYy0zMC4zMjcgMC01NSAyNC42NzMtNTUgNTVzMjQuNjczIDU1IDU1IDU1IDU2LTI0LjY3MyA1Ni01NS0yNS42NzMtNTUtNTYtNTV6IiBmaWxsPSIjNDhhNGIzIiBkYXRhLW9yaWdpbmFsPSIjYzMwMDQ3IiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PGVsbGlwc2UgY3g9IjMzNiIgY3k9IjEwMS45MSIgZmlsbD0iIzQ4YTRiMyIgcng9IjYzLjA4NyIgcnk9Ijc5LjE2NCIgZGF0YS1vcmlnaW5hbD0iI2MzMDA0NyIgc3R5bGU9IiIgY2xhc3M9IiI+PC9lbGxpcHNlPjxnIGZpbGw9IiNmZjQwNWMiPjxlbGxpcHNlIGN4PSIxNzYiIGN5PSIxMDEuOTEiIHJ4PSI2My4wODciIHJ5PSI3OS4xNjQiIGZpbGw9IiM0NTdiOGIiIGRhdGEtb3JpZ2luYWw9IiNmZjQwNWMiIHN0eWxlPSIiIGNsYXNzPSIiPjwvZWxsaXBzZT48cGF0aCBkPSJtNTYgMTUwLjkxYy0zMC4zMjcgMC01NiAyNC42NzMtNTYgNTVzMjUuNjczIDU1IDU2IDU1IDU1LTI0LjY3MyA1NS01NS0yNC42NzMtNTUtNTUtNTV6IiBmaWxsPSIjNDU3YjhiIiBkYXRhLW9yaWdpbmFsPSIjZmY0MDVjIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvZz48L2c+PC9zdmc+" />
        <nav class="navigation-bar">
            <h2>Healthy Pet</h2>
            <h3>Dog Clinic</h3>
            <a href="{{action('OwnerController@index')}}"><button type="button" class="btn btn-primary">List of owners</button></a>
            <a href="{{action('OwnerController@create')}}"><button type="button" class="btn btn-success">Create a new owner</button></a>
        </nav>
    </div>

    @endsection