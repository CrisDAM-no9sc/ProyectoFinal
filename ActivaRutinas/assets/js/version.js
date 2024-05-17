document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('bmiForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const weight = parseFloat(document.getElementById('weight').value);
        const height = parseFloat(document.getElementById('height').value) / 100;

        const bmi = weight / (height * height);
        const resultDiv = document.getElementById('bmiResult');
        resultDiv.innerHTML = `<p>Tu IMC es: ${bmi.toFixed(2)}</p>`;

        if (bmi < 18.5) {
            resultDiv.innerHTML += '<p>Clasificación: Bajo peso</p>';
        } else if (bmi >= 18.5 && bmi < 24.9) {
            resultDiv.innerHTML += '<p>Clasificación: Normal</p>';
        } else if (bmi >= 25 && bmi < 29.9) {
            resultDiv.innerHTML += '<p>Clasificación: Sobrepeso</p>';
        } else {
            resultDiv.innerHTML += '<p>Clasificación: Obesidad</p>';
        }
    });

    document.getElementById('workoutForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const exercise = document.getElementById('exercise').value;
        const date = document.getElementById('date').value;

        const workoutItem = document.createElement('div');
        workoutItem.className = 'exercise-list-item';
        workoutItem.innerHTML = `
            <span>${date}: ${exercise}</span>
            <button class="btn btn-danger btn-sm">Eliminar</button>
        `;

        workoutItem.querySelector('button').addEventListener('click', function() {
            workoutItem.remove();
        });

        document.getElementById('workoutList').appendChild(workoutItem);
        document.getElementById('workoutForm').reset();
    });
});