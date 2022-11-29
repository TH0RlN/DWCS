var n = 1;

document.getElementById('files1').addEventListener('click', evt=>
{
    n++;
    document.getElementById('div').innerHTML += '<input name="file[]" type="file" id="files' + n +'"><br>'
});