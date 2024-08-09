<style>
    /* From Uiverse.io by WhiteNervosa */ 
button#simandalika {
  font-size: 24px;
  color: #e1e1e1;
  font-family: inherit;
  font-weight: 800;
  cursor: pointer;
  position: relative;
  border: none;
  background: none;
  text-transform: uppercase;
  transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
  transition-duration: 400ms;
  transition-property: color;
}

button#simandalika:focus,
button#simandalika:hover {
  color: #fff;
}

button#simandalika:focus:after,
button#simandalika:hover:after {
  width: 100%;
  left: 0%;
}

button#simandalika:after {
  content: "";
  pointer-events: none;
  bottom: -2px;
  left: 50%;
  position: absolute;
  width: 0%;
  height: 2px;
  background-color: #fff;
  transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
  transition-duration: 400ms;
  transition-property: width, left;
}
</style>

<button id="simandalika">
    AGENDA KEGIATAN BALAI BESAR POM DI MATARAM
</button>