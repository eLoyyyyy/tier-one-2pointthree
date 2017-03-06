html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}

body {
  margin: 0;
}

figure,
header,
main,
nav,
section {
  display: block;
}

a {
  background-color: transparent;
}

h1 {
  margin: .67em 0;
  font-size: 2em;
}

img {
  border: 0;
}

figure {
  margin: 1em 40px;
}

button,
input {
  margin: 0;
  font: inherit;
  color: inherit;
}

button {
  overflow: visible;
}

button {
  text-transform: none;
}

button {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}

input {
  line-height: normal;
}

input[type="search"] {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td,
th {
  padding: 0;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

html {
  font-size: 10px;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
}

input,
button {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

a {
  color: #337ab7;
  text-decoration: none;
}

figure {
  margin: 0;
}

img {
  vertical-align: middle;
}

.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}

h1,
h2,
h4,
.h2,
.h5 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}

h1,
h2,
.h2 {
  margin-top: 20px;
  margin-bottom: 10px;
}

h4,
.h5 {
  margin-top: 10px;
  margin-bottom: 10px;
}

h1 {
  font-size: 36px;
}

h2,
.h2 {
  font-size: 30px;
}

h4 {
  font-size: 18px;
}

.h5 {
  font-size: 14px;
}

p {
  margin: 0 0 10px;
}

.text-center {
  text-align: center;
}

ul {
  margin-top: 0;
  margin-bottom: 10px;
}

ul ul {
  margin-bottom: 0;
}

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}

@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  margin-right: -15px;
  margin-left: -15px;
}

.col-md-4,
.col-lg-4,
.col-md-8,
.col-lg-8,
.col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

@media (min-width: 992px) {
  .col-md-4,
  .col-md-8 {
    float: left;
  }

  .col-md-8 {
    width: 66.66666667%;
  }

  .col-md-4 {
    width: 33.33333333%;
  }
}

@media (min-width: 1200px) {
  .col-lg-4,
  .col-lg-8,
  .col-lg-12 {
    float: left;
  }

  .col-lg-12 {
    width: 100%;
  }

  .col-lg-8 {
    width: 66.66666667%;
  }

  .col-lg-4 {
    width: 33.33333333%;
  }
}

table {
  background-color: transparent;
}

caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left;
}

th {
  text-align: left;
}

input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}

.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #999;
}

.form-control::-webkit-input-placeholder {
  color: #999;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

input[type="search"] {
  -webkit-appearance: none;
}

.form-group {
  margin-bottom: 15px;
}

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}

.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}

.collapse {
  display: none;
}

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}

.dropdown {
  position: relative;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}

.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}

.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}

.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}

.input-group-btn,
.input-group .form-control {
  display: table-cell;
}

.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}

.input-group .form-control:first-child {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group-btn:last-child > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}

.input-group-btn > .btn {
  position: relative;
}

.input-group-btn:last-child > .btn {
  z-index: 2;
  margin-left: -1px;
}

.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav > li {
  position: relative;
  display: block;
}

.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}

.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}

@media (min-width: 768px) {
  .navbar {
    border-radius: 4px;
  }
}

@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}

.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
}

@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
}

.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}

@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}

.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}

.navbar-brand > img {
  display: block;
}

@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}

.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}

.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}

.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}

@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}

.navbar-nav {
  margin: 7.5px -15px;
}

.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}

@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }

  .navbar-nav > li {
    float: left;
  }

  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
}

.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

@media (min-width: 768px) {
  .navbar-right {
    float: right !important;
    margin-right: -15px;
  }
}

.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}

.navbar-default .navbar-brand {
  color: #777;
}

.navbar-default .navbar-nav > li > a {
  color: #777;
}

.navbar-default .navbar-toggle {
  border-color: #ddd;
}

.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}

.navbar-default .navbar-collapse {
  border-color: #e7e7e7;
}

.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}

.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}

.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}

.navbar-inverse .navbar-toggle {
  border-color: #333;
}

.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}

.navbar-inverse .navbar-collapse {
  border-color: #101010;
}

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}

.label-primary {
  background-color: #337ab7;
}

.media {
  margin-top: 15px;
}

.media:first-child {
  margin-top: 0;
}

.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}

.media-body {
  width: 10000px;
}

.media-object {
  display: block;
}

.media-left {
  padding-right: 10px;
}

.media-left,
.media-body {
  display: table-cell;
  vertical-align: top;
}

.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}

.clearfix:before,
.clearfix:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after {
  display: table;
  content: " ";
}

.clearfix:after,
.container:after,
.container-fluid:after,
.row:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after {
  clear: both;
}

@-ms-viewport {
  width: device-width;
}

@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}

@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}

@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.6.3');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.6.3') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.6.3') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.6.3') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.6.3') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}

.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.fa-twitter:before {
  content: "\f099";
}

.fa-facebook:before {
  content: "\f09a";
}

.fa-pinterest:before {
  content: "\f0d2";
}

.fa-google-plus:before {
  content: "\f0d5";
}

.fa-linkedin:before {
  content: "\f0e1";
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}

.label.label-primary {
  background-color: #3ac0ff;
  color: #fff;
}

.btn-primary {
  background-color: #3ac0ff;
}

.label {
  display: inline-block;
  padding: 6px 6px 6px 6px;
  overflow: hidden;
  position: relative;
}

.label.label-tag {
  padding-left: 11.3px;
  margin-left: 11.3px;
  overflow: visible;
}

.label.label-tag:before {
  content: "";
  position: absolute;
  transform: translateY(-50%) translateX(50%) rotate(-45deg);
  -webkit-transform: translateY(-50%) translateX(50%) rotate(-45deg);
  -moz-transform: translateY(-50%) translateX(50%) rotate(-45deg);
  -ms-transform: translateY(-50%) translateX(50%) rotate(-45deg);
  border-top-left-radius: 3px;
  background-color: inherit;
  top: 50%;
  right: 100%;
  width: 16px;
  height: 16px;
}

.label.label-tag:after {
  content: "";
  position: absolute;
  box-shadow: 0 -1px 1px 0 rgba(0,0,0,0.3);
  -moz-box-shadow: 0 -1px 1px 0 rgba(0,0,0,0.3);
  -webkit-box-shadow: 0 -1px 1px 0 rgba(0,0,0,0.3);
  -ms-box-shadow: 0 -1px 1px 0 rgba(0,0,0,0.3);
  -o-box-shadow: 0 -1px 1px 0 rgba(0,0,0,0.3);
  background-color: #fff;
  border-radius: 50%;
  width: 6px;
  height: 6px;
  top: 9px;
  left: -2px;
}

.sidebar {
  position: absolute;
  width: 250px;
  height: 100%;
  z-index: 10001;
  visibility: hidden;
}

body>.sidebar {
  position: fixed;
  top: 0;
}

.sidebar .sidebar-wrap {
  width: 100%;
  height: 100%;
  overflow-y: auto;
  transform: translateX(-250px);
  -webkit-transform: translateX(-250px);
  -moz-transform: translateX(-250px);
  -ms-transform: translateX(-250px);
  background-color: #222;
  color: #fff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.5);
  -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5);
  -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5);
  -ms-box-shadow: 0 2px 6px rgba(0,0,0,0.5);
  -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5);
}

.sidebar .sidebar-wrap .sidebar-subject {
  padding: 20px 15px;
}

.sidebar .sidebar-wrap>ul>li {
  border-top: 1px solid rgba(255,255,255,0.08);
}

.sidebar .sidebar-wrap>ul>li:last-child {
  border-bottom: 1px solid rgba(255,255,255,0.08);
}

.sidebar .sidebar-wrap>ul>li>a {
  text-decoration: none !important;
  color: #eee;
}

.sidebar .sidebar-wrap ul {
  list-style: none;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.sidebar .sidebar-wrap li a {
  color: #fff;
  line-height: 1.5;
  padding: 10px 15px;
  display: block;
}

.sidebar .sidebar-wrap a.dropdown-toggle:after {
  display: block;
  float: right;
  width: 0;
  height: 0;
  margin-top: 5px;
  margin-right: -5px;
  opacity: .3;
  content: " ";
  border: 5px solid transparent;
  border-width: 5px 5px 0 5px;
  border-top-color: #fff;
}

.sidebar .sidebar-wrap .dropdown-menu {
  position: static;
  float: none;
  border-radius: 0;
  background-color: transparent;
  display: none;
  margin: 0;
  border: 0;
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
}

.sidebar .sidebar-wrap li>ul>li>a {
  font-size: .85em;
  background-color: transparent;
  color: rgba(255,255,255,0.5);
  padding-top: 0;
  padding-bottom: 6px;
}

.sidebar .sidebar-wrap li>ul>li:last-child>a {
  padding-bottom: 13px;
}

body>.sidebar+.sidebar-overlay {
  position: fixed;
}

.sidebar-overlay {
  visibility: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  z-index: 10000;
}

.sidebar-overlay:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #000;
  opacity: 0;
}

.sidebar-overlay a {
  position: absolute;
  left: 270px;
  top: 20px;
  width: 26px;
  height: 26px;
  z-index: 1;
  opacity: 0;
}

.sidebar-overlay a:after,
.sidebar-overlay a:before {
  content: "";
  display: block;
  height: 3px;
  background-color: #fff;
  border-radius: 3px;
  width: 100%;
  position: relative;
}

.sidebar-overlay a:before {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  top: 10px;
}

.sidebar-overlay a:after {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  top: 7px;
}

body {
  font-size: 14px;
}

a {
  color: #0090d3;
}

@media (min-width:768px) {
  .dropdown .dropdown-menu {
    display: block;
    transform-origin: center top;
    -moz-transform-origin: center top;
    -webkit-transform-origin: center top;
    -ms-transform-origin: center top;
    transform: scaleY(0);
    -webkit-transform: scaleY(0);
    -moz-transform: scaleY(0);
    -ms-transform: scaleY(0);
    opacity: 0;
  }
}

.form-control {
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
}

.btn {
  border: 0;
  padding: 7px 12px;
  line-height: 20px;
}

body {
  font-family: 'Noto Sans', Helvetica, Arial, sans-serif;
}

.flex {
  display: -webkit-box;
  /* OLD - iOS 6-, Safari 3.1-6, BB7 */
  display: -ms-flexbox;
  /* TWEENER - IE 10 */
  display: -webkit-flex;
  /* NEW - Safari 6.1+. iOS 7.1+, BB10 */
  display: flex;
  /* NEW, Spec - Firefox, Chrome, Opera */
  flex-wrap: wrap;
  margin: auto;
}

.flex .flex-item {
  display: flex;
  align-items: center;
  justify-content: center;
}

.header {
  margin-bottom: 20px;
}

.fa {
  font-size: 1.3em;
}

.soft-crop {
  object-fit: cover;
}

.sidebar-subject img {
  width: 200px;
  height: 60px;
}

.navbar-brand {
  display: inline-block;
  float: none;
  margin: 0 auto;
  position: relative;
}

.navbar-toggle {
  float: left;
  margin-left: 15px;
  margin-right: 0px;
}

a {
  color: #11b3ff;
}

body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main.container {
  display: flex;
  flex-direction: column;
}

main,
.bg {
  flex: 1;
}

.site {
  padding-bottom: 30px;
  padding-top: 30px;
}

.media-object {
  /*max-width: 200px;
  max-height: 110px;*/
  width: 200px;
  height: 110px;
}

.media-details {
  margin: 10px 0 10px 5px;
  color: rgba(0,0,0,0.5);
  font-size: 90%;
}

.media-heading {
  line-height: 1.4em;
}

.bg {
  margin-top: -20px;
  background-color: #fefefe;
  padding: 0 15px;
}

.navbar {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.break {
  -ms-word-break: break-all;
  word-break: break-all;
  word-wrap: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  white-space: pre-line;
}

#wp-calendar {
  width: 100%;
  font-size: 12px;
  font-weight: 300;
  border-collapse: separate;
  border-spacing: 8px;
  margin-left: -2px;
}

#wp-calendar caption {
  display: none;
}

#wp-calendar tbody td {
  margin-bottom: 10px;
  text-align: center;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  -o-border-radius: 2px;
  border-radius: 2px;
  border: 1px solid #cecbcb;
  padding: 6px;
}

#wp-calendar tbody td.pad {
  border: 0;
}

#wp-calendar tbody td#today {
  color: #1e3e44;
  border-color: #1e3e44;
}

#wp-calendar tfoot td#prev a {
  color: #888;
  font-size: 12px;
  font-weight: 400;
  position: relative;
  text-transform: uppercase;
  bottom: -9px;
  margin-bottom: 1px;
}

#wp-calendar tfoot td#prev {
  text-align: left;
}

#wp-calendar tfoot td#next {
  text-align: right;
}

#wp-calendar thead th {
  font-size: 13px;
  font-weight: 400;
  color: #888;
  text-align: center;
  padding-bottom: 10px;
}

#wp-calendar tbody td a {
  color: #47C2DC;
}

[class*=' archives'] ul li,
[class*=' recent-posts'] ul li,
li.menu-item {
  position: relative;
  padding-left: 1rem;
  margin-bottom: 0.7rem;
}

[class*=' archives'] ul,
[class*=' recent-posts'] ul {
  list-style: none;
  padding: 0;
}

[class*=' recent-posts'] ul li a {
  display: block;
}

[class*=' recent-posts'] ul li a {
  font-size: 1.5rem;
  line-height: 2.3rem;
  font-weight: bold;
}
