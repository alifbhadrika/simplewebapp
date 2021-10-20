/* details page */
const backButton = document.querySelector(".back-button");
const onClickBack = () => {
  window.location.href = "../.";
};
backButton.addEventListener("click", () => {
  onClickBack();
});
