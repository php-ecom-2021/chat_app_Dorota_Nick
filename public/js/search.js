let timer;
const search = document.getElementById('search');
const searchForm = document.forms.search;
const output = document.querySelector('#output');

searchForm.addEventListener('submit', (e)=>e.preventDefault())
//search.addEventListener('focus', searchUsers) /*Uncomment this line to get all users as a result when search field is targeted*/
search.addEventListener('keyup', searchUsers)

function searchUsers(){
    clearTimeout(timer);
    timer = setTimeout(() => {
        fetch(`/search/${search.value}`)
        .then(res => res.json())
        .then(
            function renderUsers(data){
                output.innerHTML = '';
                for(d of data){
                    output.innerHTML += `
                    <a class="flex p-4 user-item" href="messages/${d.id}">
                        <img class="w-16 h-16 rounded-full mr-4" src="images/${d.avatar ? d.avatar : 'default_avatar.jpg'}"/>
                        <div>
                            <h2 class="text-xl font-bold pb-2">${d.name}</h2>
                        </div>
                    </a>
                    `
                }
            }
        )
        .catch(err => console.log(err))
    }, 1000);
    //messages/${d.id}
}