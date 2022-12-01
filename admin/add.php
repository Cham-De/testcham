<div class="popup-container" id="popup_container">
        <div class="popup-modal">
          <form action="connect.php" method="post">
            <label for="name" class="title"><h3 style="color: rgb(0, 0, 0); margin-top: 3px; margin-right: 10px; margin-bottom: 20px;">Campaign ID :</h3> <h2 style="color: rgb(0, 0, 0);">002</h2>
          </label>
          <label for="start-date">Start Date
            <input type="date" id="s-date">
          </label>
          <label for="objective">Objective
            <select id="objective">
                <option value="awareness">Awareness</option>
                <option value="leads">Leads</option>
                <option value="engagement">Engagement</option>
                <option value="sales">Sales</option>
            </select>
          </label>
          <label for="status">Status
            <select id="status">
                <option value="tobelaunched">To-be Launched</option>
                <option value="ongoing">Ongoing</option>
                <option value="complete">Complete</option>
            </select>
          </label>
          <label for="budget">Budget
            <input type="number" id="budget">
          </label>
          <button class="cancel" id="close" type="reset" value="Reset">Cancel</button>
          <button class="submit" id="save" type="submit" value="Submit">Save</button>
          </form>

        </div>
      </div>

    <script>
        const add_btn = document.getElementById('add_btn');
        const close = document.getElementById('close');
        const save = document.getElementById('save');
        const popup_container = document.getElementById('popup_container');

        add_btn.addEventListener('click', () => {
            popup_container.classList.add('show');
        });

        close.addEventListener('click', () => {
            popup_container.classList.remove('show');
        });

        save.addEventListener('click', () => {
            popup_container.classList.remove('show');
        });

    </script>