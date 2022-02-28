<template src="./dashboard.html" />
<style scoped>

@import url("https://unpkg.com/@webpixels/css@1.1.5/dist/index.css");
@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");

/* LEFT MAIN */

.left-main {
  /* background: turquoise; */
  width: 6.5rem;
  height: 100%;
  padding: 1.5rem 0.5rem 5rem 0.5rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}
.left-main .up {
  width: 100%;
  height: auto;
}
.left-main .image-wrapper {
  width: 100%;
  height: auto;
  display: flex;
  justify-content: center;
  align-items: center;

  margin-bottom: 2.5rem;
}
.left-main .image-wrapper ion-icon {
  font-size: 2rem;
  padding: 0.5rem;

  border-radius: 2.3rem;
  border: 0.07rem solid white;
}

.left-main .quit {
  width: 100%;
  height: auto;

  display: flex;
  justify-content: center;
  align-items: center;
}
.left-main .quit ion-icon {
  font-size: 0.8rem;
  padding: 0.4rem;

  border: 0.1rem solid rgb(43, 43, 43);
  border-radius: 0.6rem;
}

.left-main .left-bar {
  width: 80%;
  height: auto;
  padding: 1.7rem 0.7rem;
  background: rgb(29, 29, 29);
  border-radius: 1.5rem;
}
.left-main .left-bar ul {
  width: 100%;
  height: auto;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 1rem;
}
.left-main .left-bar ul li {
  width: 1.8rem;
  height: 1.9rem;

  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 0.4rem;

  transition: 200ms;
}
.left-main .left-bar ul li:hover {
  background: rgb(211, 25, 25);
  transition: 200ms;
}
.left-main .left-bar ul li ion-icon {
  font-size: 1.3rem;
  /* color: rgb(255, 255, 255); */
}

/* MAIN */
.main {
  width: 100%;
  height: auto;
  padding: 1.5rem 1rem 0.5rem 1rem;
}

/* LEFT CONTAINER */
.main nav {
  /* background: violet; */
  width: 100%;
  height: 3rem;

  display: flex;
  justify-content: space-between;
  align-items: center;
}
nav .left-container {
  width: auto;
  height: 100%;

  display: flex;
  justify-content: center;
  align-items: center;
}
nav .left-container .dashboard-box {
  width: auto;
  height: 100%;
  padding: 0 1rem;

  display: flex;
  align-items: center;
  justify-content: center;
}

nav .left-container .support-messaging-box {
  width: max-content;
  height: 100%;
  padding: 0 1rem;

  display: flex;
  justify-content: center;
  align-items: center;
}

.dashboard-box h2,
.support-messaging-box h2 {
  width: auto;
  height: auto;

  font-size: 0.8rem;
}

/* SEARCH */
.search {
  width: auto;
  height: 100%;

  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;

  padding: 0 5rem;

  border-radius: 5rem;
  border: 0.08rem solid white;
}
.search input {
  width: auto;
  height: 1.3rem;
  background: black;
  border-radius: 0.4rem;
  border: none;
  opacity: 0.5;
  outline: none;
}
.search input::placeholder {
  color: white;
  opacity: 1;
}

/* PRINT / EXPORT */
nav .print-export {
  width: auto;
  height: 95%;

  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;
}
.print-export .print-box,
.export-box {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.5rem;
  padding: 0 1.1rem;

  background: rgb(29, 29, 29);
  border-radius: 0.8rem;
  /* transition: 500ms;    */
}
/* .print-export .print-box:hover , .export-box:hover{
        transition: 500ms;
        transform: scale(1.1);
    } */
.print-box h1,
.export-box h1 {
  width: auto;
  height: auto;
  font-size: 0.7rem;
}
.print-box ion-icon,
.export-box ion-icon {
  font-size: 1.1rem;
  color: rgb(114, 114, 114);
}

/*RIGHT MAIN*/

.right-main {
  /* background:rgb(153, 153, 153) ; */
  width: 5.6rem;
  height: 100%;
  padding: 1.6rem 0.5rem 1.6rem 0.5rem;

  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}

.right-main .user-container {
  width: 100%;
  height: auto;

  display: flex;
  justify-content: center;
  align-items: center;
}
.right-main .user-container ion-icon {
  font-size: 1.5rem;
  padding: 0.5rem;

  border-radius: 2.3rem;
  border: 0.07rem solid white;
}

.right-main .ticket {
  width: 100%;
  height: auto;
  padding: 1.2rem 0;

  background: rgb(211, 25, 25);
  border-radius: 1rem;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 1.5rem;
}
.right-main .ticket ion-icon {
  font-size: 1.3rem;
}
.right-main .ticket h1 {
  width: auto;
  height: auto;
  text-align: center;
  font-size: 0.9rem;
}

.right-main .notifications {
  width: 100%;
  height: auto;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 0.6rem;
}
.right-main .notifications .notification-box,
.message-bx {
  width: 2.3rem;
  height: 2.3rem;

  background: rgb(29, 29, 29);
  border-radius: 0.5rem;

  display: flex;
  justify-content: center;
  align-items: center;
}
.right-main .notifications .message-bx {
  position: relative;
  background: rgb(211, 25, 25);
}
.right-main .notifications .message-bx .circle-ok {
  position: absolute;
  top: 0;
  right: 0;

  width: 0.7rem;
  height: 0.7rem;
  border: 0.18rem solid black;
  border-radius: 0.5rem;
  background: rgb(211, 25, 25);
}
.right-main .notifications .notification-box ion-icon,
.message-bx ion-icon {
  font-size: 1rem;
}

.main .title {
  width: auto;
  height: auto;
  margin-top: 1.5rem;
  margin-bottom: 1rem;
}
.main .title h1 {
  width: auto;
  height: auto;
  font-size: 2.2rem;
}
.main .subtext {
  width: 100%;
  height: auto;

  display: flex;
  align-items: center;
}

.main .subtext h2 {
  width: max-content;
  height: auto;
  margin-right: auto;
  font-size: 1rem;
  color: rgb(102, 102, 102);
}
.main .subtext .right-bar-time-search {
  width: auto;
  height: auto;
  display: flex;
  gap: 2rem;
  opacity: 0.5;
}
.main .subtext .right-bar-time-search .time {
  display: flex;
}
.main .subtext .right-bar-time-search .time h1,
.subtext-search h1 {
  width: auto;
  height: auto;
  font-size: 0.7rem;
  font-weight: bold;
}
.main .subtext .right-bar-time-search .time,
.subtext-search {
  width: auto;
  height: auto;

  display: flex;
  align-items: center;
  gap: 0.5rem;
}
.main .subtext .right-bar-time-search .time ion-icon,
.subtext-search ion-icon {
  cursor: pointer;
}
.main .subtext .right-bar-time-search .time ion-icon:last-of-type {
  transform: rotate(-90deg);
  transition: 200ms;
}
.main .subtext .right-bar-time-search .time ion-icon:last-of-type:hover {
  transition: 200ms;
  transform: rotate(0deg);
}
</style>
