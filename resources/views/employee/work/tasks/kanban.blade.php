@extends('employee.layouts.employee.employee')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-page-head">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Tasks List</h1>
                                <nav>
                                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                                        <li class="breadcrumb-item"><a href="#">Tasks</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tasks Manage</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tasks
                                        </li>
                                    </ol>
                                </nav>
                        </div>
                    </div>
                    <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                                <div id="kanbanDefault" class="js-kanban">
                                    <div class="kanban-container" style="width: 750px;">
                                        <div data-id="_inprocess" data-order="1" class="kanban-board"
                                            style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                            <header class="kanban-board-header kanban-light"><div class="kanban-title-board">
                                                <div class="kanban-title-content">
                                                    <h6 class="title">In process</h6>
                                                    <span class="count">3</span>
                                                </div>
                                            </div></header>
                                           
                                            <main class="kanban-drag">

                                                @foreach ($data as $allData)
                                                    @if($allData->task->tasks_status == "pending")
                                                        <div class="kanban-item">
                                                            <div class="kanban-item-title">
                                                                <h6 class="title">{{$allData->task->workProject->projectTitle}}</h6>
                                                            </div>
                                                            <em class="icon ni ni-task-fill-c"></em><span>{{$allData->task->tasksName}}</span>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </main>
                                            <footer></footer>
                                        </div>
                                        <div data-id="_working" data-order="2" class="kanban-board"
                                            style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                            <header class="kanban-board-header">
                                                <div class="kanban-title-board">Working</div>
                                            </header>
                                            <main class="kanban-drag">

                                                @foreach ($data as $allData)

                                                    @if(!empty($allData->task->latestTimeLog($allData->task->tasks_id)))
                                                    <div class="kanban-item">
                                                        <div class="kanban-item-title">
                                                            <h6 class="title">{{$allData->task->workProject->projectTitle}}</h6>
                                                        </div>
                                                        <em class="icon ni ni-task-fill-c"></em><span>{{$allData->task->tasksName}}</span>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            </main>
                                            <footer></footer>
                                        </div>
                                        <div data-id="_done" data-order="3" class="kanban-board"
                                            style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                            <header class="kanban-board-header">
                                                <div class="kanban-title-board">Completed</div>
                                            </header>
                                            <main class="kanban-drag">
                                                @foreach ($data as $allData)
                                                    @if($allData->task->tasks_status == "completed")
                                                    <div class="kanban-item">
                                                        <div class="kanban-item-title">
                                                            <h6 class="title">{{$allData->task->workProject->projectTitle}}</h6>
                                                        </div>
                                                        <em class="icon ni ni-task-fill-c"></em><span>{{$allData->task->tasksName}}</span>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            </main>
                                            <footer></footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
