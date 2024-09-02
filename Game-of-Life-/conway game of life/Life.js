const gridElement = document.getElementById('grid');
const startButton = document.getElementById('start-btn');
const stopButton = document.getElementById('stop-btn');
const randomButton = document.getElementById('random-btn');

const rows = 50;
const cols = 50;
let grid = [];
let interval = null;

function createGrid() {
    grid = [];
    for (let i = 0; i < rows; i++) {
        let row = [];
        for (let j = 0; j < cols; j++) {
            const cell = document.createElement('div');
            cell.classList.add('cell');
            cell.dataset.row = i;
            cell.dataset.col = j;
            cell.addEventListener('click', toggleCell);
            gridElement.appendChild(cell);
            row.push(0);
        }
        grid.push(row);
    }
}

function toggleCell(event) {
    const row = event.target.dataset.row;
    const col = event.target.dataset.col;
    if (grid[row][col] === 0) {
        event.target.classList.add('alive');
        grid[row][col] = 1;
    } else {
        event.target.classList.remove('alive');
        grid[row][col] = 0;
    }
}

function updateGrid() {
    const newGrid = grid.map(arr => [...arr]);

    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            const aliveNeighbors = countAliveNeighbors(i, j);
            if (grid[i][j] === 1) {
                if (aliveNeighbors < 2 || aliveNeighbors > 3) {
                    newGrid[i][j] = 0;
                }
            } else {
                if (aliveNeighbors === 3) {
                    newGrid[i][j] = 1;
                }
            }
        }
    }

    grid = newGrid;
    renderGrid();
}

function countAliveNeighbors(row, col) {
    let count = 0;
    for (let i = -1; i <= 1; i++) {
        for (let j = -1; j <= 1; j++) {
            if (i === 0 && j === 0) continue;
            const x = row + i;
            const y = col + j;
            if (x >= 0 && x < rows && y >= 0 && y < cols) {
                count += grid[x][y];
            }
        }
    }
    return count;
}

function renderGrid() {
    const cells = document.getElementsByClassName('cell');
    for (let i = 0; i < cells.length; i++) {
        const row = cells[i].dataset.row;
        const col = cells[i].dataset.col;
        if (grid[row][col] === 1) {
            cells[i].classList.add('alive');
        } else {
            cells[i].classList.remove('alive');
        }
    }
}

function startGame() {
    if (!interval) {
        interval = setInterval(updateGrid, 100);
    }
}

function stopGame() {
    clearInterval(interval);
    interval = null;
}

function randomizeGrid() {
    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            const randomState = Math.random() > 0.7 ? 1 : 0;
            grid[i][j] = randomState;
        }
    }
    renderGrid();
}

createGrid();

startButton.addEventListener('click', startGame);
stopButton.addEventListener('click', stopGame);
randomButton.addEventListener('click', randomizeGrid);
