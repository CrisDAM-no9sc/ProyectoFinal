document.getElementById('add-task-btn').addEventListener('click', function() {
    const taskInput = document.getElementById('task-input');
    const taskName = taskInput.value.trim();
    if (taskName) {
        addTask(taskName);
        taskInput.value = '';
    }
});

document.getElementById('download-pdf-btn').addEventListener('click', function() {
    downloadTasksAsPdf();
});

function addTask(taskName) {
    const taskList = document.getElementById('task-list');

    const taskItem = document.createElement('li');
    taskItem.classList.add('task-item');

    const checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.classList.add('task-checkbox');
    checkbox.addEventListener('change', function() {
        taskSpan.classList.toggle('completed', checkbox.checked);
    });

    const taskSpan = document.createElement('span');
    taskSpan.classList.add('task-name');
    taskSpan.textContent = taskName;

    const deleteBtn = document.createElement('span');
    deleteBtn.classList.add('delete-task');
    deleteBtn.innerHTML = '<i class="fa fa-trash"></i>';
    deleteBtn.addEventListener('click', function() {
        taskList.removeChild(taskItem);
    });

    taskItem.appendChild(checkbox);
    taskItem.appendChild(taskSpan);
    taskItem.appendChild(deleteBtn);

    taskList.appendChild(taskItem);
}

function downloadTasksAsPdf() {
    const taskList = document.getElementById('task-list').children;
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.text('To-Do List', 10, 10);
    Array.from(taskList).forEach((taskItem, index) => {
        const taskName = taskItem.querySelector('.task-name').textContent;
        const isCompleted = taskItem.querySelector('.task-checkbox').checked;
        const taskText = isCompleted ? `[X] ${taskName}` : `[ ] ${taskName}`;
        const y = 20 + (index * 10);
        doc.text(taskText, 10, y);
    });

    doc.save('tasks.pdf');
}


function saveTasks() {
    const taskList = document.getElementById('task-list').children;
    const tasks = [];

    for (let i = 0; i < taskList.length; i++) {
        const taskItem = taskList[i];
        const taskName = taskItem.querySelector('.task-name').textContent;
        const isCompleted = taskItem.querySelector('.task-checkbox').checked;
        tasks.push({ name: taskName, completed: isCompleted });
    }

    localStorage.setItem('tasks', JSON.stringify(tasks));
}

function loadTasks() {
    const tasks = JSON.parse(localStorage.getItem('tasks')) || [];

    tasks.forEach(task => {
        addTask(task.name);
        const taskList = document.getElementById('task-list');
        const taskItem = taskList.lastChild;
        if (task.completed) {
            taskItem.querySelector('.task-checkbox').checked = true;
            taskItem.querySelector('.task-name').classList.add('completed');
        }
    });
}

function downloadTasksAsJson() {
    const tasks = JSON.parse(localStorage.getItem('tasks')) || [];
    const json = JSON.stringify(tasks, null, 2);
    const blob = new Blob([json], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'tasks.json';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    URL.revokeObjectURL(url);
}

function downloadTasksAsPdf() {
    const tasks = JSON.parse(localStorage.getItem('tasks')) || [];
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.text('To-Do List', 10, 10);
    tasks.forEach((task, index) => {
        const y = 20 + (index * 10);
        const taskText = task.completed ? `[X] ${task.name}` : `[ ] ${task.name}`;
        doc.text(taskText, 10, y);
    });

    doc.save('tasks.pdf');
}