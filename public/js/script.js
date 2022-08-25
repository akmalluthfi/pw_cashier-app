const btnConfirmDelete = document.querySelectorAll('.btn-confirmDelete');

btnConfirmDelete.forEach((btnDelete) => {
  btnDelete.addEventListener('click', function () {
    const modalConfirmDelete = document.getElementById('confirmDelete');
    modalConfirmDelete
      .querySelector('.modal-footer > a')
      .setAttribute('href', `./delete.php?id=${this.dataset.id}`);
  });
});

const btnEditData = document.querySelectorAll('.btn-editData');

btnEditData.forEach((btnEdit) => {
  btnEdit.addEventListener('click', function () {
    const tr = this.parentElement.parentElement;

    const nama = tr.querySelector('.data-nama').innerText;
    const alamat = tr.querySelector('.data-alamat').innerText;
    const jenis_kelamin = tr.querySelector('.data-jenis-kelamin').innerText;
    const agama = tr.querySelector('.data-agama').innerText;
    const sekolah_asal = tr.querySelector('.data-sekolah-asal').innerText;

    const formEditData = document
      .getElementById('editData')
      .querySelector('form');

    formEditData
      .querySelector('input[type=hidden]')
      .setAttribute('value', this.dataset.id);
    formEditData.querySelector('input#edit-nama').setAttribute('value', nama);
    formEditData
      .querySelector('input#edit-alamat')
      .setAttribute('value', alamat);

    if (jenis_kelamin === 'Laki-Laki') {
      formEditData
        .querySelector('input#edit-laki-laki')
        .setAttribute('checked', true);
    } else if (jenis_kelamin === 'Perempuan') {
      formEditData
        .querySelector('input#edit-perempuan')
        .setAttribute('checked', true);
    }

    const elAgama = formEditData.querySelectorAll('select#edit-agama > option');
    elAgama.forEach((element) => {
      if (element.value === agama) {
        element.setAttribute('selected', '');
      }
    });

    formEditData
      .querySelector('input#edit-sekolah-asal')
      .setAttribute('value', sekolah_asal);
  });
});
