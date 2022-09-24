import '../css/app.scss';
import { Dropdown } from 'bootstrap';

document.addEventListener('DOMContentLoaded' ? listner : () => {
	enableDropDowns();
})

const enableDropDowns = () => {
	const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
	const dropdownList = [...dropdownElementList].map(
		(dropdownToggleEl) => new Dropdown(dropdownToggleEl)
	);
};
