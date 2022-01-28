<style>
.w-reset,
.w-editor-bem-RichTextInput_Content *:not(rteselectionmarker),
.w-editor-rich-text-container * {
  position: static;
  left: auto;
  top: auto;
  right: auto;
  bottom: auto;
  z-index: auto;
  display: block;
  visibility: visible;
  overflow: visible;
  overflow-x: visible;
  overflow-y: visible;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: auto;
  height: auto;
  max-height: none;
  max-width: none;
  min-height: 0;
  margin: 0;
  padding: 0;
  float: none;
  clear: none;
  border: 0 none transparent;
  border-radius: 0;
  background: none;
  background-image: none;
  background-position: 0% 0%;
  background-size: auto auto;
  background-repeat: repeat;
  background-origin: padding-box;
  background-clip: border-box;
  background-attachment: scroll;
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
  opacity: 1.0;
  -webkit-transform: none;
  transform: none;
  -webkit-transition: none;
  transition: none;
  direction: ltr;
  font-family: inherit;
  font-weight: inherit;
  color: inherit;
  font-size: inherit;
  line-height: inherit;
  font-style: inherit;
  font-variant: inherit;
  text-align: inherit;
  letter-spacing: inherit;
  text-decoration: inherit;
  text-indent: 0;
  text-transform: inherit;
  list-style-type: disc;
  text-shadow: none;
  font-smoothing: auto;
  vertical-align: baseline;
  cursor: inherit;
  white-space: inherit;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
}
span.w-reset,
span.w-editor-bem-RichTextInput_Content *:not(rteselectionmarker),
span.w-editor-rich-text-container *,
.w-reset span,
.w-editor-bem-RichTextInput_Content *:not(rteselectionmarker) span,
.w-editor-rich-text-container * span {
  display: inline;
}
.w-editor-ghost-span {
  font-size: 0px;
  line-height: 0px;
  display: inline;
  width: 0px;
  height: 0px;
  pointer-events: none;
  position: relative;
  direction: ltr !important;
}
.w-editor-ghost-span:after {
  content: '';
  position: absolute;
  width: 6px;
  height: 6px;
  left: -3px;
  top: -3px;
}
.w-editor-ghost-span.w-editor-top {
  vertical-align: top;
}
.w-editor-ghost-span.w-editor-bottom {
  vertical-align: bottom;
}
.w-editor-ghost-span.w-editor-wide {
  width: 20%;
}
.w-editor-ghost-span.w-editor-mode-block {
  display: block;
  clear: both;
}
.w-editor-ghost-span.w-editor-mode-float-right {
  float: right;
}
.w-editor-ghost-span.w-editor-mode-float-left {
  float: left;
}
@-webkit-keyframes wf-bounce-in {
  0% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  0.5% {
    opacity: 0;
    -webkit-transform: scale(0.94);
    transform: scale(0.94);
  }
  50% {
    opacity: 1.0;
    -webkit-transform: scale(1.005);
    transform: scale(1.005);
  }
  75% {
    -webkit-transform: scale(0.997);
    transform: scale(0.997);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes wf-bounce-in {
  0% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  0.5% {
    opacity: 0;
    -webkit-transform: scale(0.94);
    transform: scale(0.94);
  }
  50% {
    opacity: 1.0;
    -webkit-transform: scale(1.005);
    transform: scale(1.005);
  }
  75% {
    -webkit-transform: scale(0.997);
    transform: scale(0.997);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@-webkit-keyframes wf-move-progress {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes wf-move-progress {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-webkit-keyframes wf-blink {
  0%,
  100% {
    background: #808080;
    -webkit-box-shadow: -8px 0 #1F1F1F;
    box-shadow: -8px 0 #1F1F1F;
  }
  50% {
    background: #1F1F1F;
    -webkit-box-shadow: -8px 0 #808080;
    box-shadow: -8px 0 #808080;
  }
}
@keyframes wf-blink {
  0%,
  100% {
    background: #808080;
    -webkit-box-shadow: -8px 0 #1F1F1F;
    box-shadow: -8px 0 #1F1F1F;
  }
  50% {
    background: #1F1F1F;
    -webkit-box-shadow: -8px 0 #808080;
    box-shadow: -8px 0 #808080;
  }
}
@-webkit-keyframes wf-blink-in {
  40% {
    opacity: 1;
  }
}
@keyframes wf-blink-in {
  40% {
    opacity: 1;
  }
}
@-webkit-keyframes wf-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes wf-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes wf-move-right {
  0% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px);
  }
}
@keyframes wf-move-right {
  0% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px);
  }
}
@-webkit-keyframes wf-animate-right-arrow {
  0% {
    -webkit-transform: translateX(5px);
    transform: translateX(5px);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(16px);
    transform: translateX(16px);
    opacity: 0;
  }
}
@keyframes wf-animate-right-arrow {
  0% {
    -webkit-transform: translateX(5px);
    transform: translateX(5px);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(16px);
    transform: translateX(16px);
    opacity: 0;
  }
}
@-webkit-keyframes wf-pulse {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(3.3);
    transform: scale(3.3);
    opacity: 0;
  }
}
@keyframes wf-pulse {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(3.3);
    transform: scale(3.3);
    opacity: 0;
  }
}
@-webkit-keyframes wf-pulse-appear {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0;
  }
  70% {
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}
@keyframes wf-pulse-appear {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0;
  }
  70% {
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}
@-webkit-keyframes wf-exclaim-front-icon {
  0% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  25% {
    opacity: 1;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  50% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  75% {
    opacity: 1;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes wf-exclaim-front-icon {
  0% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  25% {
    opacity: 1;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  50% {
    opacity: 0;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  75% {
    opacity: 1;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@-webkit-keyframes wf-exclaim-back-icon {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  25% {
    opacity: 0;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  75% {
    opacity: 0;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes wf-exclaim-back-icon {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  25% {
    opacity: 0;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  75% {
    opacity: 0;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@-webkit-keyframes wf-distractor-blink {
  40% {
    opacity: 1;
  }
}
@keyframes wf-distractor-blink {
  40% {
    opacity: 1;
  }
}
/**
 * IMPORTANT: Do not change the values in this file without updating them in zindex.js
 *
 * ISSUE #7308 (https://github.com/webflow/webflow/issues/7308) will remove the need for this synchronization
 *
 * NOTE: For new components, use ui/Layer, not these zIndex: https://github.com/webflow/webflow/blob/dev/docs/app/designer-overlay-system/overlay-system.md
 */
/* Note: external less veriables used in this file must exist in both designer and editor
and variables defined here must not conflict with those defined in the designer or editor
also rich-text.less has its own sprite-sheet */
.w-editor-bem-RichText {
  pointer-events: auto;
}
.w-editor-bem-RichText * {
  pointer-events: auto;
}
[class*='w-editor-edit'] .w-richtext .w-embed,
[class*='w-editor-edit'] .w-rte-editable .w-embed {
  color: transparent;
}
[class*='w-editor-edit'] .w-richtext .w-embed:after,
[class*='w-editor-edit'] .w-rte-editable .w-embed:after {
  display: block;
  line-height: 0;
}
.w-spinner {
  width: 36px;
  height: 36px;
  overflow: hidden;
}
.w-spinner i {
  display: none;
  position: absolute;
}
.w-spinner .w-spinner-uploading-thin {
  display: block;
  top: 13px;
  left: 13px;
  opacity: .8;
}
.w-spinner .w-spinner-success {
  top: 13px;
  left: 12px;
}
.w-spinner .w-spinner-success-thin {
  top: 13px;
  left: 12px;
}
.w-spinner .w-spinner-cancel {
  top: 13px;
  left: 13px;
}
.w-spinner .w-common-loading-dots {
  top: -21px !important;
  left: 12px!important;
}
.w-spinner.w-queued .w-common-loading-dots {
  display: block;
}
.w-spinner.w-queued .w-spinner-uploading-thin {
  display: none;
}
.w-spinner.w-complete .w-spinner-uploading-thin {
  display: none;
}
.w-spinner.w-complete .w-spinner-success {
  display: block;
}
.w-spinner.w-medium.w-queued .w-common-loading-dots {
  top: -25px !important;
  left: 8px!important;
}
.w-spinner.w-medium .w-spinner-uploading-thin {
  top: 10px;
  left: 10px;
}
.w-spinner.w-medium .w-spinner-success {
  top: 11px;
  left: 9px;
}
.w-spinner.w-medium .w-spinner-cancel {
  top: 10px;
  left: 10px;
}
.w-spinner.w-small.w-queued .w-common-loading-dots {
  display: none;
}
.w-spinner.w-small .w-spinner-uploading-thin,
.w-spinner.w-small .w-spinner-success {
  display: none;
}
.w-spinner.w-small.w-complete .w-spinner-percent,
.w-spinner.w-small.w-complete .w-spinner-border {
  opacity: 0;
}
.w-spinner.w-small.w-complete .w-spinner-success-thin {
  display: block;
  top: 8px;
  left: 6px;
}
.w-spinner.w-small.w-error .w-spinner-percent,
.w-spinner.w-small.w-error .w-spinner-border {
  opacity: 0;
}
.w-spinner.w-small.w-error .w-spinner-cancel {
  display: none;
}
.w-spinner.w-small.w-error .w-spinner-success-thin {
  display: block;
  top: 6px;
  left: 7px;
}
.w-spinner svg {
  width: 100%;
  height: 100%;
}
.w-spinner .w-spinner-overlay {
  fill: rgba(0, 0, 0, 0.8);
}
.w-spinner .w-spinner-border {
  stroke-width: 1px;
  stroke: rgba(255, 255, 255, 0.35);
}
.w-spinner .w-spinner-percent {
  stroke: #fff;
  stroke-width: 2px;
}
.w-spinner .w-spinner-percent.w-hide {
  opacity: 0;
}
.w-spinner.w-complete .w-spinner-percent {
  stroke: #50bf5d;
}
.w-spinner.w-error .w-spinner-uploading-thin {
  display: none;
}
.w-spinner.w-error .w-spinner-percent {
  stroke: #f35353;
}
.w-spinner.w-error .w-spinner-cancel {
  display: block;
}
.w-editor-selectize-control.w-editor-plugin-drag_drop.w-editor-multi > .w-editor-selectize-input > div.w-editor-ui-sortable-placeholder {
  visibility: visible !important;
  background: #f2f2f2 !important;
  background: rgba(0, 0, 0, 0.06) !important;
  border: 0 none !important;
  -webkit-box-shadow: inset 0 0 12px 4px #fff;
  box-shadow: inset 0 0 12px 4px #fff;
}
.w-editor-selectize-control.w-editor-plugin-drag_drop .w-editor-ui-sortable-placeholder::after {
  content: '!';
  visibility: hidden;
}
.w-editor-selectize-control.w-editor-plugin-drag_drop .w-editor-ui-sortable-helper {
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
.w-editor-selectize-dropdown-header {
  position: relative;
  padding: 5px 8px;
  border-bottom: 1px solid #d0d0d0;
  background: #f8f8f8;
  border-radius: 3px 3px 0 0;
}
.w-editor-selectize-dropdown-header-close {
  position: absolute;
  right: 8px;
  top: 50%;
  color: #303030;
  opacity: 0.4;
  margin-top: -12px;
  line-height: 20px;
  font-size: 20px !important;
}
.w-editor-selectize-dropdown-header-close:hover {
  color: #000000;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup {
  border-right: 1px solid #f2f2f2;
  border-top: 0 none;
  float: left;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup:last-child {
  border-right: 0 none;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup:before {
  display: none;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup-header {
  border-top: 0 none;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value] {
  position: relative;
  padding-right: 18px !important;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value] .w-editor-remove {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  width: 17px;
  text-align: center;
  font-weight: bold;
  font-size: 12px;
  color: inherit;
  text-decoration: none;
  vertical-align: middle;
  display: inline-block;
  padding: 2px 0 0 0;
  border-radius: 0 2px 2px 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value] .w-editor-remove > i {
  position: absolute;
  background-position: 0;
  width: 5px;
  height: 6px;
  opacity: 0.5;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  -webkit-transition: opacity 200ms;
  transition: opacity 200ms;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value] .w-editor-remove:hover > i {
  opacity: 1;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value].w-editor-active .w-editor-remove {
  border-left-color: #cacaca;
}
.w-editor-selectize-control.w-editor-plugin-remove_button .w-editor-disabled [data-value] .w-editor-remove:hover {
  background: none;
}
.w-editor-selectize-control.w-editor-plugin-remove_button .w-editor-disabled [data-value] .w-editor-remove {
  border-left-color: #ffffff;
}
.w-editor-selectize-control {
  position: relative;
}
.w-editor-selectize-dropdown,
.w-editor-selectize-input,
.w-editor-selectize-input input {
  color: #303030;
  font-family: inherit;
  font-size: 13px;
  line-height: 18px;
  -webkit-font-smoothing: inherit;
}
.w-editor-selectize-input,
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input.w-editor-input-active {
  background: #fff;
  cursor: text;
  display: inline-block;
}
.w-editor-selectize-input {
  border: 1px solid #d0d0d0;
  padding: 8px 8px;
  display: inline-block;
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: 3px;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input.w-editor-has-items {
  padding: 6px 8px 3px;
}
.w-editor-selectize-input.w-editor-full {
  background-color: #fff;
}
.w-editor-selectize-input.w-editor-disabled,
.w-editor-selectize-input.w-editor-disabled * {
  cursor: default !important;
}
.w-editor-selectize-input.w-editor-focus {
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
}
.w-editor-selectize-input.w-editor-dropdown-active {
  border-radius: 3px 3px 0 0;
}
.w-editor-selectize-input > * {
  vertical-align: baseline;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input > div {
  cursor: default;
  margin: 0 3px 3px 0;
  padding: 2px 6px;
  background: #f2f2f2;
  color: #303030;
  border: 0 solid #d0d0d0;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input > div.w-editor-active {
  background: #e8e8e8;
  color: #303030;
  border: 0 solid #cacaca;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input.w-editor-disabled > div,
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input.w-editor-disabled > div.w-editor-active {
  color: #7d7d7d;
  background: #f2f2f2;
  border: 0 solid #ffffff;
}
.w-editor-selectize-input > input {
  padding: 0 !important;
  min-height: 0 !important;
  max-height: none !important;
  color: white;
  max-width: 100% !important;
  margin: 0 2px 0 0 !important;
  text-indent: 0 !important;
  border: 0 none !important;
  background: none !important;
  line-height: inherit !important;
  -webkit-user-select: auto !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.w-editor-selectize-input > input::-ms-clear {
  display: none;
}
.w-editor-selectize-input > input:focus {
  outline: none !important;
}
.w-editor-selectize-input::after {
  content: ' ';
  display: block;
  clear: left;
}
.w-editor-selectize-dropdown {
  position: absolute;
  z-index: 10;
  margin: -1px 0 0 0;
  border-top: 0 none;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.w-editor-selectize-dropdown [data-selectable] {
  cursor: default;
  overflow: hidden;
}
.w-editor-selectize-dropdown [data-selectable] .w-editor-highlight {
  background: rgba(125, 168, 208, 0.2);
  font-weight: 800;
  text-decoration: underline;
  border-radius: 1px;
}
.w-editor-selectize-dropdown [data-selectable],
.w-editor-selectize-dropdown .w-editor-optgroup-header {
  padding: 5px 8px;
}
.w-editor-selectize-dropdown .w-editor-optgroup:first-child .w-editor-optgroup-header {
  border-top: 0 none;
}
.w-editor-selectize-dropdown .w-editor-optgroup-header {
  color: #303030;
  background: #fff;
  cursor: default;
}
.w-editor-selectize-dropdown .w-editor-active {
  background-color: #f5fafd;
  color: #495c68;
}
.w-editor-selectize-dropdown .w-editor-active.w-editor-create {
  color: #495c68;
}
.w-editor-selectize-dropdown .w-editor-create {
  color: rgba(48, 48, 48, 0.5);
}
.w-editor-selectize-dropdown-content {
  overflow-y: auto;
  overflow-x: hidden;
  max-height: 200px;
}
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input,
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input input {
  cursor: default;
}
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input.w-editor-input-active,
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input.w-editor-input-active input {
  cursor: text;
}
.w-editor-selectize-control.w-editor-rtl.w-editor-single .w-editor-selectize-input:after {
  left: 15px;
  right: auto;
}
.w-editor-selectize-control.w-editor-rtl .w-editor-selectize-input > input {
  margin: 0 4px 0 -2px !important;
}
.w-editor-selectize-control .w-editor-selectize-input.w-editor-disabled {
  opacity: 0.5;
  background-color: #fafafa;
}
.w-editor-selectize-control.w-editor-plugin-drag_drop.w-editor-multi > .w-editor-selectize-input > div.w-editor-ui-sortable-placeholder {
  visibility: visible !important;
  background: #f2f2f2 !important;
  background: rgba(0, 0, 0, 0.06) !important;
  border: 0 none !important;
  -webkit-box-shadow: inset 0 0 12px 4px #fff;
  box-shadow: inset 0 0 12px 4px #fff;
}
.w-editor-selectize-control.w-editor-plugin-drag_drop .w-editor-ui-sortable-placeholder::after {
  content: '!';
  visibility: hidden;
}
.w-editor-selectize-control.w-editor-plugin-drag_drop .w-editor-ui-sortable-helper {
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
.w-editor-selectize-dropdown-header {
  position: relative;
  padding: 5px 8px;
  border-bottom: 1px solid #d0d0d0;
  background: #f8f8f8;
  border-radius: 3px 3px 0 0;
}
.w-editor-selectize-dropdown-header-close {
  position: absolute;
  right: 8px;
  top: 50%;
  color: #303030;
  opacity: 0.4;
  margin-top: -12px;
  line-height: 20px;
  font-size: 20px !important;
}
.w-editor-selectize-dropdown-header-close:hover {
  color: #000000;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup {
  border-right: 1px solid #f2f2f2;
  border-top: 0 none;
  float: left;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup:last-child {
  border-right: 0 none;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup:before {
  display: none;
}
.w-editor-selectize-dropdown.w-editor-plugin-optgroup_columns .w-editor-optgroup-header {
  border-top: 0 none;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value] {
  position: relative;
  padding-right: 24px !important;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value] .w-editor-remove {
  z-index: 1;
  /* fixes ie bug (see #392) */
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  width: 17px;
  text-align: center;
  font-weight: bold;
  font-size: 12px;
  color: inherit;
  text-decoration: none;
  vertical-align: middle;
  display: inline-block;
  padding: 2px 0 0 0;
  border-left: 1px solid #d0d0d0;
  border-radius: 0 2px 2px 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value] .w-editor-remove:hover {
  background: rgba(0, 0, 0, 0.05);
}
.w-editor-selectize-control.w-editor-plugin-remove_button [data-value].w-editor-active .w-editor-remove {
  border-left-color: #cacaca;
}
.w-editor-selectize-control.w-editor-plugin-remove_button .w-editor-disabled [data-value] .w-editor-remove:hover {
  background: none;
}
.w-editor-selectize-control.w-editor-plugin-remove_button .w-editor-disabled [data-value] .w-editor-remove {
  border-left-color: #ffffff;
}
.w-editor-selectize-control {
  position: relative;
}
.w-editor-selectize-dropdown,
.w-editor-selectize-input,
.w-editor-selectize-input input {
  color: #303030;
  font-family: inherit;
  font-size: 13px;
  line-height: 18px;
  -webkit-font-smoothing: inherit;
}
.w-editor-selectize-input,
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input.w-editor-input-active {
  background: #fff;
  cursor: text;
  display: inline-block;
}
.w-editor-selectize-input {
  border: 1px solid #d0d0d0;
  padding: 8px 8px;
  display: inline-block;
  width: 100%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: 3px;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input.w-editor-has-items {
  padding: 6px 8px 3px;
}
.w-editor-selectize-input.w-editor-full {
  background-color: #fff;
}
.w-editor-selectize-input.w-editor-disabled,
.w-editor-selectize-input.w-editor-disabled * {
  cursor: default !important;
}
.w-editor-selectize-input.w-editor-focus {
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
}
.w-editor-selectize-input.w-editor-dropdown-active {
  border-radius: 3px 3px 0 0;
}
.w-editor-selectize-input > * {
  vertical-align: baseline;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input > div {
  cursor: pointer;
  margin: 0 3px 3px 0;
  padding: 2px 6px;
  background: #f2f2f2;
  color: #303030;
  border: 0 solid #d0d0d0;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input > div.w-editor-active {
  background: #e8e8e8;
  color: #303030;
  border: 0 solid #cacaca;
}
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input.w-editor-disabled > div,
.w-editor-selectize-control.w-editor-multi .w-editor-selectize-input.w-editor-disabled > div.w-editor-active {
  color: #7d7d7d;
  background: #ffffff;
  border: 0 solid #ffffff;
}
.w-editor-selectize-input > input {
  display: inline-block !important;
  padding: 0 !important;
  min-height: 0 !important;
  max-height: none !important;
  max-width: 100% !important;
  margin: 0 2px 0 0 !important;
  text-indent: 0 !important;
  border: 0 none !important;
  background: none !important;
  line-height: inherit !important;
  -webkit-user-select: auto !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.w-editor-selectize-input > input::-ms-clear {
  display: none;
}
.w-editor-selectize-input > input:focus {
  outline: none !important;
}
.w-editor-selectize-input::after {
  content: ' ';
  display: block;
  clear: left;
}
.w-editor-selectize-input.w-editor-dropdown-active::before {
  content: ' ';
  display: block;
  position: absolute;
  background: #f0f0f0;
  height: 1px;
  bottom: 0;
  left: 0;
  right: 0;
}
.w-editor-selectize-dropdown {
  position: absolute;
  z-index: 10;
  border: 1px solid #d0d0d0;
  background: #fff;
  margin: -1px 0 0 0;
  border-top: 0 none;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  border-radius: 0 0 3px 3px;
}
.w-editor-selectize-dropdown [data-selectable] {
  cursor: pointer;
  overflow: hidden;
}
.w-editor-selectize-dropdown [data-selectable] .w-editor-highlight {
  background: rgba(125, 168, 208, 0.2);
  border-radius: 1px;
}
.w-editor-selectize-dropdown [data-selectable],
.w-editor-selectize-dropdown .w-editor-optgroup-header {
  padding: 5px 8px;
}
.w-editor-selectize-dropdown .w-editor-optgroup:first-child .w-editor-optgroup-header {
  border-top: 0 none;
}
.w-editor-selectize-dropdown .w-editor-optgroup-header {
  color: #303030;
  background: #fff;
  cursor: default;
}
.w-editor-selectize-dropdown .w-editor-active {
  background-color: #f5fafd;
  color: #495c68;
}
.w-editor-selectize-dropdown .w-editor-active.w-editor-create {
  color: #495c68;
}
.w-editor-selectize-dropdown .w-editor-create {
  color: rgba(48, 48, 48, 0.5);
}
.w-editor-selectize-dropdown-content {
  overflow-y: auto;
  overflow-x: hidden;
  max-height: 200px;
}
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input,
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input input {
  cursor: pointer;
}
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input.w-editor-input-active,
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input.w-editor-input-active input {
  cursor: text;
}
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input:after {
  content: ' ';
  display: block;
  position: absolute;
  top: 50%;
  right: 15px;
  margin-top: -3px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 5px 5px 0 5px;
  border-color: #808080 transparent transparent transparent;
}
.w-editor-selectize-control.w-editor-single .w-editor-selectize-input.w-editor-dropdown-active:after {
  margin-top: -4px;
  border-width: 0 5px 5px 5px;
  border-color: transparent transparent #808080 transparent;
}
.w-editor-selectize-control.w-editor-rtl.w-editor-single .w-editor-selectize-input:after {
  left: 15px;
  right: auto;
}
.w-editor-selectize-control.w-editor-rtl .w-editor-selectize-input > input {
  margin: 0 4px 0 -2px !important;
}
.w-editor-selectize-control .w-editor-selectize-input.w-editor-disabled {
  opacity: 0.5;
  background-color: #fafafa;
}
.w-codemirror {
  /**
  Copied from CodeMirror v5.40.0
  https://github.com/codemirror/CodeMirror/blob/ed8dfeb5e2ed25b5dd1f1eccc7b757ca6dbd118d/lib/codemirror.css

  Not modified. Customizations go in
  - public/css/designer-flux/codemirror-custom.less
  - public/css/dashboard/codemirror.less
*/
  /* BASICS */
  /* PADDING */
  /* GUTTER */
  /* CURSOR */
  /* Shown when moving in bi-directional text */
  /* Can style cursor different in overwrite (non-insert) mode */
  /* DEFAULT THEME */
  /* Default styles for common addons */
  /* STOP */
  /* The rest of this file contains styles related to the mechanics of
   the editor. You probably shouldn't touch them. */
  /* The fake, visible scrollbars. Used to force redraw during scrolling
   before actual scrolling happens, thus preventing shaking and
   flickering artifacts. */
  /* Force content-box sizing for the elements where we expect it */
  /* Used to force a border model for a node */
  /* See issue #2901 */
  /* Help users use markselection to safely style text background */
  /**
  Modified from CodeMirror v5.40.0
  https://github.com/codemirror/CodeMirror/blob/ed8dfeb5e2ed25b5dd1f1eccc7b757ca6dbd118d/theme/material.css
*/
  /*

    Name:       material
    Author:     Michael Kaminsky (http://github.com/mkaminsky11)

    Original material color scheme by Mattia Astorino (https://github.com/equinusocio/material-theme)

*/
  /* webflow added */
  /* end webflow added */
  /* webflow removed
  .cm-s-webflow-material .cm-tag { color: rgba(255, 83, 112, 1); }
*/
}
.w-codemirror .CodeMirror {
  /* Set height, width, borders, and global font properties here */
  font-family: monospace;
  height: 300px;
  color: black;
  direction: ltr;
}
.w-codemirror .CodeMirror-lines {
  padding: 4px 0;
  /* Vertical padding around content */
}
.w-codemirror .CodeMirror pre {
  padding: 0 4px;
  /* Horizontal padding of content */
}
.w-codemirror .CodeMirror-scrollbar-filler,
.w-codemirror .CodeMirror-gutter-filler {
  background-color: white;
  /* The little square between H and V scrollbars */
}
.w-codemirror .CodeMirror-gutters {
  border-right: 1px solid #ddd;
  background-color: #f7f7f7;
  white-space: nowrap;
}
.w-codemirror .CodeMirror-linenumber {
  padding: 0 3px 0 5px;
  min-width: 20px;
  text-align: right;
  color: #999;
  white-space: nowrap;
}
.w-codemirror .CodeMirror-guttermarker {
  color: black;
}
.w-codemirror .CodeMirror-guttermarker-subtle {
  color: #999;
}
.w-codemirror .CodeMirror-cursor {
  border-left: 1px solid black;
  border-right: none;
  width: 0;
}
.w-codemirror .CodeMirror div.CodeMirror-secondarycursor {
  border-left: 1px solid silver;
}
.w-codemirror .cm-fat-cursor .CodeMirror-cursor {
  width: auto;
  border: 0 !important;
  background: #7e7;
}
.w-codemirror .cm-fat-cursor div.CodeMirror-cursors {
  z-index: 1;
}
.w-codemirror .cm-fat-cursor-mark {
  background-color: rgba(20, 255, 20, 0.5);
  -webkit-animation: blink 1.06s steps(1) infinite;
  animation: blink 1.06s steps(1) infinite;
}
.w-codemirror .cm-animate-fat-cursor {
  width: auto;
  border: 0;
  -webkit-animation: blink 1.06s steps(1) infinite;
  animation: blink 1.06s steps(1) infinite;
  background-color: #7e7;
}
@-webkit-keyframes blink {
  50% {
    background-color: transparent;
  }
}
@keyframes blink {
  50% {
    background-color: transparent;
  }
}
.w-codemirror .cm-tab {
  display: inline-block;
  text-decoration: inherit;
}
.w-codemirror .CodeMirror-rulers {
  position: absolute;
  left: 0;
  right: 0;
  top: -50px;
  bottom: -20px;
  overflow: hidden;
}
.w-codemirror .CodeMirror-ruler {
  border-left: 1px solid #ccc;
  top: 0;
  bottom: 0;
  position: absolute;
}
.w-codemirror .cm-s-default .CodeMirror-selected {
  background: #c3dbf8 !important;
}
.w-codemirror .cm-s-default .cm-header {
  color: blue;
}
.w-codemirror .cm-s-default .cm-quote {
  color: #090;
}
.w-codemirror .cm-negative {
  color: #d44;
}
.w-codemirror .cm-positive {
  color: #292;
}
.w-codemirror .cm-header,
.w-codemirror .cm-strong {
  font-weight: bold;
}
.w-codemirror .cm-em {
  font-style: italic;
}
.w-codemirror .cm-link {
  text-decoration: underline;
}
.w-codemirror .cm-strikethrough {
  text-decoration: line-through;
}
.w-codemirror .cm-s-default .cm-keyword {
  color: #708;
}
.w-codemirror .cm-s-default .cm-atom {
  color: #219;
}
.w-codemirror .cm-s-default .cm-number {
  color: #164;
}
.w-codemirror .cm-s-default .cm-def {
  color: #00f;
}
.w-codemirror .cm-s-default .cm-variable-2 {
  color: #05a;
}
.w-codemirror .cm-s-default .cm-variable-3,
.w-codemirror .cm-s-default .cm-type {
  color: #085;
}
.w-codemirror .cm-s-default .cm-comment {
  color: #a50;
}
.w-codemirror .cm-s-default .cm-string {
  color: #a11;
}
.w-codemirror .cm-s-default .cm-string-2 {
  color: #f50;
}
.w-codemirror .cm-s-default .cm-meta {
  color: #555;
}
.w-codemirror .cm-s-default .cm-qualifier {
  color: #555;
}
.w-codemirror .cm-s-default .cm-builtin {
  color: #30a;
}
.w-codemirror .cm-s-default .cm-bracket {
  color: #997;
}
.w-codemirror .cm-s-default .cm-tag {
  color: #170;
}
.w-codemirror .cm-s-default .cm-attribute {
  color: #00c;
}
.w-codemirror .cm-s-default .cm-hr {
  color: #999;
}
.w-codemirror .cm-s-default .cm-link {
  color: #00c;
}
.w-codemirror .cm-s-default .cm-error {
  color: #f00;
}
.w-codemirror .cm-invalidchar {
  color: #f00;
}
.w-codemirror .CodeMirror-composing {
  border-bottom: 2px solid;
}
.w-codemirror div.CodeMirror span.CodeMirror-matchingbracket {
  color: #0b0;
}
.w-codemirror div.CodeMirror span.CodeMirror-nonmatchingbracket {
  color: #a22;
}
.w-codemirror .CodeMirror-matchingtag {
  background: rgba(255, 150, 0, 0.3);
}
.w-codemirror .CodeMirror-activeline-background {
  background: #e8f2ff;
}
.w-codemirror .CodeMirror {
  position: relative;
  overflow: hidden;
  background: white;
}
.w-codemirror .CodeMirror-scroll {
  overflow: scroll !important;
  /* Things will break if this is overridden */
  /* 30px is the magic margin used to hide the element's real scrollbars */
  /* See overflow: hidden in .CodeMirror */
  margin-bottom: -30px;
  margin-right: -30px;
  padding-bottom: 30px;
  height: 100%;
  outline: none;
  /* Prevent dragging from highlighting the element */
  position: relative;
}
.w-codemirror .CodeMirror-sizer {
  position: relative;
  border-right: 30px solid transparent;
}
.w-codemirror .CodeMirror-vscrollbar,
.w-codemirror .CodeMirror-hscrollbar,
.w-codemirror .CodeMirror-scrollbar-filler,
.w-codemirror .CodeMirror-gutter-filler {
  position: absolute;
  z-index: 6;
  display: none;
}
.w-codemirror .CodeMirror-vscrollbar {
  right: 0;
  top: 0;
  overflow-x: hidden;
  overflow-y: scroll;
}
.w-codemirror .CodeMirror-hscrollbar {
  bottom: 0;
  left: 0;
  overflow-y: hidden;
  overflow-x: scroll;
}
.w-codemirror .CodeMirror-scrollbar-filler {
  right: 0;
  bottom: 0;
}
.w-codemirror .CodeMirror-gutter-filler {
  left: 0;
  bottom: 0;
}
.w-codemirror .CodeMirror-gutters {
  position: absolute;
  left: 0;
  top: 0;
  min-height: 100%;
  z-index: 3;
}
.w-codemirror .CodeMirror-gutter {
  white-space: normal;
  height: 100%;
  display: inline-block;
  vertical-align: top;
  margin-bottom: -30px;
}
.w-codemirror .CodeMirror-gutter-wrapper {
  position: absolute;
  z-index: 4;
  background: none !important;
  border: none !important;
}
.w-codemirror .CodeMirror-gutter-background {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 4;
}
.w-codemirror .CodeMirror-gutter-elt {
  position: absolute;
  cursor: default;
  z-index: 4;
}
.w-codemirror .CodeMirror-gutter-wrapper ::selection {
  background-color: transparent;
}
.w-codemirror .CodeMirror-gutter-wrapper ::-moz-selection {
  background-color: transparent;
}
.w-codemirror .CodeMirror-lines {
  cursor: text;
  min-height: 1px;
  /* prevents collapsing before first draw */
}
.w-codemirror .CodeMirror pre {
  /* Reset some styles that the rest of the page might have set */
  border-radius: 0;
  border-width: 0;
  background: transparent;
  font-family: inherit;
  font-size: inherit;
  margin: 0;
  white-space: pre;
  word-wrap: normal;
  line-height: inherit;
  color: inherit;
  z-index: 2;
  position: relative;
  overflow: visible;
  -webkit-tap-highlight-color: transparent;
  -webkit-font-variant-ligatures: contextual;
  font-variant-ligatures: contextual;
}
.w-codemirror .CodeMirror-wrap pre {
  word-wrap: break-word;
  white-space: pre-wrap;
  word-break: normal;
}
.w-codemirror .CodeMirror-linebackground {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 0;
}
.w-codemirror .CodeMirror-linewidget {
  position: relative;
  z-index: 2;
  padding: 0.1px;
  /* Force widget margins to stay inside of the container */
}
.w-codemirror .CodeMirror-rtl pre {
  direction: rtl;
}
.w-codemirror .CodeMirror-code {
  outline: none;
}
.w-codemirror .CodeMirror-scroll,
.w-codemirror .CodeMirror-sizer,
.w-codemirror .CodeMirror-gutter,
.w-codemirror .CodeMirror-gutters,
.w-codemirror .CodeMirror-linenumber {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
.w-codemirror .CodeMirror-measure {
  position: absolute;
  width: 100%;
  height: 0;
  overflow: hidden;
  visibility: hidden;
}
.w-codemirror .CodeMirror-cursor {
  position: absolute;
  pointer-events: none;
}
.w-codemirror .CodeMirror-measure pre {
  position: static;
}
.w-codemirror div.CodeMirror-cursors {
  visibility: hidden;
  position: relative;
  z-index: 3;
}
.w-codemirror div.CodeMirror-dragcursors {
  visibility: visible;
}
.w-codemirror .CodeMirror-focused div.CodeMirror-cursors {
  visibility: visible;
}
.w-codemirror .CodeMirror-selected {
  background: #d9d9d9;
}
.w-codemirror .CodeMirror-focused .CodeMirror-selected {
  background: #d7d4f0;
}
.w-codemirror .CodeMirror-crosshair {
  cursor: crosshair;
}
.w-codemirror .CodeMirror-line::selection,
.w-codemirror .CodeMirror-line > span::selection,
.w-codemirror .CodeMirror-line > span > span::selection {
  background: #d7d4f0;
}
.w-codemirror .CodeMirror-line::-moz-selection,
.w-codemirror .CodeMirror-line > span::-moz-selection,
.w-codemirror .CodeMirror-line > span > span::-moz-selection {
  background: #d7d4f0;
}
.w-codemirror .cm-searching {
  background-color: #ffa;
  background-color: rgba(255, 255, 0, 0.4);
}
.w-codemirror .cm-force-border {
  padding-right: .1px;
}
@media print {
  .w-codemirror {
    /* Hide the cursor when printing */
  }
  .w-codemirror .CodeMirror div.CodeMirror-cursors {
    visibility: hidden;
  }
}
.w-codemirror .cm-tab-wrap-hack:after {
  content: '';
}
.w-codemirror span.CodeMirror-selectedtext {
  background: none;
}
.w-codemirror .cm-s-webflow-material.CodeMirror {
  background-color: #fcfcfc;
  color: #3B3B3B;
}
.w-codemirror .cm-s-webflow-material .CodeMirror-gutters {
  background: #fcfcfc;
  color: #3B3B3B;
  border-right: none;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.w-codemirror .cm-s-webflow-material .CodeMirror-gutter {
  border-right: 1px solid #212121;
}
.w-codemirror .cm-s-webflow-material.CodeMirror-focused .CodeMirror-gutters {
  background: white;
}
.w-codemirror .cm-s-webflow-material.CodeMirror-focused .CodeMirror-gutter {
  border-right-color: #1a1a1a;
}
.w-codemirror .cm-s-webflow-material.CodeMirror-focused {
  outline: none;
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  background: white;
  border-radius: 2px;
}
.w-codemirror .cm-s-webflow-material.CodeMirror-focused:hover {
  outline: none;
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
}
.w-codemirror .cm-s-webflow-material .CodeMirror-linenumber {
  color: #737373;
  text-align: center;
}
.w-codemirror .cm-s-webflow-material .CodeMirror-guttermarker,
.w-codemirror .cm-s-webflow-material .CodeMirror-guttermarker-subtle,
.w-codemirror .cm-s-webflow-material .CodeMirror-linenumber {
  color: #537f7e;
}
.w-codemirror .cm-s-webflow-material .CodeMirror-cursor {
  border-left: 1px solid #d6d6d6;
}
.w-codemirror .cm-s-webflow-material div.CodeMirror-selected {
  background: none;
}
.w-codemirror .cm-s-webflow-material.CodeMirror-focused div.CodeMirror-selected {
  background: rgba(52, 144, 235, 0.35);
}
.w-codemirror .cm-s-webflow-material .CodeMirror-line::selection,
.w-codemirror .cm-s-webflow-material .CodeMirror-line > span::selection,
.w-codemirror .cm-s-webflow-material .CodeMirror-line > span > span::selection {
  background: rgba(255, 255, 255, 0.1);
}
.w-codemirror .cm-s-webflow-material .CodeMirror-line::-moz-selection,
.w-codemirror .cm-s-webflow-material .CodeMirror-line > span::-moz-selection,
.w-codemirror .cm-s-webflow-material .CodeMirror-line > span > span::-moz-selection {
  background: rgba(255, 255, 255, 0.1);
}
.w-codemirror .cm-s-webflow-material .CodeMirror-activeline-background {
  background: rgba(0, 0, 0, 0);
}
.w-codemirror .cm-s-webflow-material .cm-keyword {
  color: #c792ea;
}
.w-codemirror .cm-s-webflow-material .cm-operator {
  color: #e9eded;
}
.w-codemirror .cm-s-webflow-material .cm-variable-2 {
  color: #80CBC4;
}
.w-codemirror .cm-s-webflow-material .cm-variable-3,
.w-codemirror .cm-s-webflow-material .cm-type {
  color: #82B1FF;
}
.w-codemirror .cm-s-webflow-material .cm-builtin {
  color: #DECB6B;
}
.w-codemirror .cm-s-webflow-material .cm-atom {
  color: #F77669;
}
.w-codemirror .cm-s-webflow-material .cm-number {
  color: #F77669;
}
.w-codemirror .cm-s-webflow-material .cm-def {
  color: #e9eded;
}
.w-codemirror .cm-s-webflow-material .cm-string {
  color: #C3E88D;
}
.w-codemirror .cm-s-webflow-material .cm-string-2 {
  color: #80CBC4;
}
.w-codemirror .cm-s-webflow-material .cm-comment {
  color: #546E7A;
}
.w-codemirror .cm-s-webflow-material .cm-variable {
  color: #82B1FF;
}
.w-codemirror .cm-s-webflow-material .cm-tag {
  color: #80CBC4;
}
.w-codemirror .cm-s-webflow-material .cm-meta {
  color: #80CBC4;
}
.w-codemirror .cm-s-webflow-material .cm-attribute {
  color: #FFCB6B;
}
.w-codemirror .cm-s-webflow-material .cm-property {
  color: #80CBAE;
}
.w-codemirror .cm-s-webflow-material .cm-qualifier {
  color: #DECB6B;
}
.w-codemirror .cm-s-webflow-material .cm-variable-3,
.w-codemirror .cm-s-webflow-material .cm-type {
  color: #DECB6B;
}
.w-codemirror .cm-s-webflow-material .cm-error {
  color: white;
  background-color: #c92c3f;
}
.w-codemirror .cm-s-webflow-material .CodeMirror-matchingbracket {
  text-decoration: underline;
  color: white !important;
}
.w-virtualized {
  /* Collection default theme */
  /* Grid default theme */
  /* FlexTable default theme */
}
.w-virtualized .w-editor-Collection {
  position: relative;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  /* Without this property, Chrome repaints the entire Collection any time a new row or column is added.
     Firefox only repaints the new row or column (regardless of this property).
     Safari and IE don't support the property at all. */
  will-change: transform;
}
.w-virtualized .w-editor-Collection__innerScrollContainer {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  overflow: hidden;
}
.w-virtualized .w-editor-Collection__cell {
  position: absolute;
}
.w-virtualized .Grid {
  position: relative;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  /* Without this property, Chrome repaints the entire Grid any time a new row or column is added.
     Firefox only repaints the new row or column (regardless of this property).
     Safari and IE don't support the property at all. */
  will-change: transform;
}
.w-virtualized .Grid__innerScrollContainer {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  overflow: hidden;
}
.w-virtualized .Grid__cell {
  position: absolute;
}
.w-virtualized .w-editor-FlexTable__Grid {
  overflow-x: hidden;
}
.w-virtualized .w-editor-FlexTable__headerRow {
  font-weight: 700;
  text-transform: uppercase;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  overflow: hidden;
}
.w-virtualized .w-editor-FlexTable__headerTruncatedText {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.w-virtualized .w-editor-FlexTable__row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  overflow: hidden;
}
.w-virtualized .w-editor-FlexTable__headerColumn,
.w-virtualized .w-editor-FlexTable__rowColumn {
  margin-right: 10px;
  min-width: 0px;
}
.w-virtualized .w-editor-FlexTable__headerColumn:first-of-type,
.w-virtualized .w-editor-FlexTable__rowColumn:first-of-type {
  margin-left: 10px;
}
.w-virtualized .w-editor-FlexTable__headerColumn {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  overflow: hidden;
}
.w-virtualized .w-editor-FlexTable__sortableHeaderColumn {
  cursor: pointer;
}
.w-virtualized .w-editor-FlexTable__rowColumn {
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
  height: 100%;
}
.w-virtualized .w-editor-FlexTable__sortableHeaderIconContainer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.w-virtualized .w-editor-FlexTable__sortableHeaderIcon {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 24px;
  flex: 0 0 24px;
  height: 1em;
  width: 1em;
  fill: currentColor;
}
.w-virtualized .w-editor-FlexTable__truncatedColumnText {
  text-overflow: ellipsis;
  overflow: hidden;
}
.w-editor-invalid-input {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
}
.w-editor-invalid-input > input.w-editor-input {
  color: #ff5266;
}
.w-editor-preview-input {
  background: #4d4d4d;
  border-color: #6b6b6b;
}
.w-editor-highlighted-input {
  background: rgba(107, 176, 255, 0.35);
  border-color: rgba(107, 176, 255, 0.8);
}
.w-editor-notice-input {
  background: #6f6452;
  border-color: #9e8863;
}
.w-editor-bem-Field + .w-editor-bem-Field,
.w-editor-bem-WireframeField + .w-editor-bem-WireframeField,
.w-editor-bem-InlineField + .w-editor-bem-Field,
.w-editor-bem-Field_Group + .w-editor-bem-Field,
.w-editor-bem-Field + .w-editor-bem-Field_Group {
  margin-top: 16px;
}
.w-editor-bem-Field + .w-editor-bem-Field-secondary,
.w-editor-bem-WireframeField + .w-editor-bem-WireframeField-secondary,
.w-editor-bem-InlineField + .w-editor-bem-Field-secondary {
  margin-top: 7px;
}
.w-editor-bem-Field-inline + .w-editor-bem-Field-inline,
.w-editor-bem-Field-inline + .w-editor-bem-Button {
  margin-top: 0;
  margin-left: 20px;
}
.w-editor-bem-Icon + .w-editor-bem-Text,
.w-editor-bem-Svg + .w-editor-bem-Text,
.w-editor-bem-Text + .w-editor-bem-Icon,
.w-editor-bem-Button_Icon + .w-editor-bem-Text,
.w-editor-bem-Link_Icon + .w-editor-bem-Text,
.w-editor-bem-Text + .w-editor-bem-Link_Icon,
.w-editor-bem-Checkbox + .w-editor-bem-Icon,
.w-editor-bem-Pill + .w-editor-bem-Pill,
.w-editor-bem-Pill + .w-editor-bem-Link,
.w-editor-bem-Button + .w-editor-bem-Button,
.w-editor-bem-TextInput + .w-editor-bem-Button,
.w-editor-bem-Text + .w-editor-bem-TextInput,
.w-editor-bem-Link + .w-editor-bem-Button,
.w-editor-bem-Text + .w-editor-bem-ProfilePictures,
.w-editor-bem-Swatch + .w-editor-bem-Text,
.w-editor-bem-Text + .w-editor-bem-Button,
.w-editor-bem-SelectInput + .w-editor-bem-Button,
.w-editor-bem-TagSelect + .w-editor-bem-Button {
  margin-left: 8px;
}
.w-editor-bem-Dropdown + .w-editor-bem-Dropdown,
.w-editor-bem-ProfilePictures + .w-editor-bem-Pane_Actions,
.w-editor-bem-ProfilePicture + .w-editor-bem-Text,
.w-editor-bem-Button + .w-editor-bem-Pane_Title {
  margin-left: 12px;
}
.w-editor-bem-ProfilePicture:focus-visible {
  outline: 2px solid #3490eb;
}
.w-editor-bem-TextInput + .w-editor-bem-Pill,
.w-editor-bem-Heading + .w-editor-bem-Image {
  margin-top: 8px;
}
.w-editor-bem-TextInput + .w-editor-bem-Pill {
  vertical-align: bottom;
}
.w-editor-bem-Field_Notice + .w-editor-bem-Field_Notice {
  margin-top: -5px;
}
.w-editor-bem-List + .w-editor-bem-Paragraph,
.w-editor-bem-Field + .w-editor-bem-Paragraph,
.w-editor-bem-List + .w-editor-bem-Pane_Message,
.w-editor-bem-Pane_Message + .w-editor-bem-Paragraph {
  margin-top: 12px;
}
.w-editor-bem-Field_Label_Text + .w-editor-bem-HintButton {
  margin-left: 7px;
}
.w-editor-bem-Heading + .w-editor-bem-Heading_Text {
  margin-top: 10px;
}
.w-editor-bem-Heading + .w-editor-bem-Paragraph,
.w-editor-bem-Paragraph + .w-editor-bem-Heading,
.w-editor-bem-Paragraph + .w-editor-bem-Paragraph {
  margin-top: 10px;
}
.w-editor-bem-Heading + .w-editor-bem-Field,
.w-editor-bem-Heading + .w-editor-bem-Pane_Message,
.w-editor-bem-Heading + .w-editor-bem-List {
  margin-top: 16px;
}
.w-editor-bem-Heading_Text + .w-editor-bem-Field,
.w-editor-bem-Heading_Text + .w-editor-bem-Pane_Message,
.w-editor-bem-Heading_Text + .w-editor-bem-List {
  margin-top: 16px;
}
.w-editor-bem-Form_Body > .w-editor-bem-Pane_Message:first-child {
  margin: 20px 8px 0 8px;
}
.w-editor-bem-ProfilePicture + .w-editor-bem-ProfilePicture,
.w-editor-bem-SlugPreview_Icon + .w-editor-bem-Text,
.w-editor-bem-EditablePill_Icon + .w-editor-bem-Text,
.w-editor-bem-Text + .w-editor-bem-Svg {
  margin-left: 4px;
}
.w-editor-bem-SpecificityLabel + .w-editor-bem-Warn,
.w-editor-bem-SpecificityLabel-text + .w-editor-bem-UnitBox {
  margin-left: 5px;
}
.w-editor-bem-Table_Body + .w-editor-bem-Table_Pagination {
  margin-top: 20px;
}
.w-editor-bem-Confirm_ActionButton + .w-editor-bem-Confirm_CancelButton {
  margin-left: auto;
}
.w-editor-bem-Button {
  -webkit-appearance: none;
  padding: 0 10px;
  background: #5e5e5e;
  border-radius: 2px;
  font-family: Inter, Helvetica, Arial, sans-serif;
  border: 1px solid #333333;
  color: #3B3B3B;
  cursor: default;
  white-space: nowrap;
  font-size: 12px;
  line-height: 30px;
  text-align: center;
  text-decoration: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  outline: none;
}
.w-editor-bem-Button:hover {
  color: #333;
  background: #6b6b6b;
}
.w-editor-bem-Button:active {
  background: #5e5e5e;
}
.w-editor-bem-Button-block {
  display: block;
  width: 100%;
  padding: 0;
}
.w-editor-bem-Button-inline {
  display: inline-block;
  width: auto;
}
.w-editor-bem-Button-active {
  position: relative;
  background: #fcfcfc;
  border-color: #D1D1D1;
}
.w-editor-bem-Button-active:hover {
  background: #fcfcfc;
}
.w-editor-bem-Button-head {
  font-size: 11px;
  line-height: 26px;
  height: 29px;
}
.w-editor-bem-Button-thin {
  line-height: 20px;
}
.w-editor-bem-Button-icon {
  padding-left: 5px;
  padding-right: 5px;
  min-width: 35px;
}
.w-editor-bem-Button-small {
  line-height: 20px;
  min-width: 22px;
  height: 22px;
}
.w-editor-bem-Button-primary {
  background: #3490eb;
  color: #333;
}
.w-editor-bem-Button-primary:hover {
  background: #4b9ded;
}
.w-editor-bem-Button-primary:active {
  background: #3490eb;
}
.w-editor-bem-Button-emphasis {
  background: #109155;
  color: #333;
}
.w-editor-bem-Button-emphasis:hover {
  background: #13a862;
}
.w-editor-bem-Button-dynamic {
  background: #7868be;
  color: #333;
}
.w-editor-bem-Button-dynamic:hover {
  background: #887ac6;
}
.w-editor-bem-Button-warning {
  background: #d44f33;
  color: #333;
}
.w-editor-bem-Button-warning:hover {
  background: #d86148;
}
.w-editor-bem-Button-over-mask {
  z-index: 22;
}
.w-editor-bem-Button-risk {
  background: #5e5e5e;
  color: #333;
}
.w-editor-bem-Button-risk:hover {
  background: #c92c3f;
}
.w-editor-bem-Button-danger {
  background: #c92c3f;
  color: #333;
}
.w-editor-bem-Button-danger:hover {
  background: #d43b4d;
}
.w-editor-bem-Button-disabled {
  opacity: 0.5;
  cursor: not-allowed;
}
.w-editor-bem-Button-disabled.w-editor-bem-Button-active {
  background: #fcfcfc;
}
.w-editor-bem-Button_Inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  height: 22px;
  min-width: 22px;
}
.w-editor-bem-Button_Icon {
  vertical-align: middle;
  position: relative;
  opacity: 0.75;
}
.w-editor-bem-Button:hover .w-editor-bem-Button_Icon {
  opacity: 1;
}
.w-editor-bem-Button-disabled:hover > * {
  color: #3B3B3B;
}
.w-editor-bem-Button-disabled:hover > i {
  opacity: 0.8;
}
.w-editor-bem-Checkbox {
  position: relative;
  display: inline-block;
  cursor: default;
}
.w-editor-bem-Checkbox_Input {
  display: inline-block;
  -webkit-appearance: none;
  border: 1px solid #D1D1D1;
  height: 14px;
  width: 14px;
  margin-right: 10px;
  border-radius: 2px;
  background: #fcfcfc;
  cursor: default;
  position: relative;
  overflow: visible;
  vertical-align: baseline;
}
.w-editor-bem-Checkbox_Input::before {
  position: relative;
  top: -2px;
  left: -1px;
  content: 'x';
  color: transparent;
  pointer-events: none;
  display: block;
  opacity: 0;
}
.w-editor-bem-Checkbox_Input:checked::before {
  opacity: 1;
}
.w-editor-bem-Checkbox_Input:hover {
  background: white;
}
.w-editor-bem-Checkbox_Input:focus {
  outline: 0;
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  background: white;
}
.w-editor-bem-Checkbox-small .w-editor-bem-Checkbox_Input {
  width: 12px;
  height: 12px;
  line-height: 12px;
}
.w-editor-bem-Checkbox-small .w-editor-bem-Checkbox_Input::before {
  top: -3px;
  left: -2px;
}
.w-editor-bem-Checkbox-compact .w-editor-bem-Checkbox_Input {
  width: 12px;
  height: 12px;
  margin-right: 6px;
  vertical-align: middle;
}
.w-editor-bem-Checkbox-compact .w-editor-bem-Checkbox_Input::before {
  content: none;
}
.w-editor-bem-Checkbox_CheckMark {
  position: absolute;
  top: 1px;
  left: 0;
  color: #fff;
  pointer-events: none;
}
.w-editor-bem-Checkbox_Label {
  display: inline;
  cursor: default;
}
.w-editor-bem-Checkbox_Label-dimmer {
  color: #000000;
}
.w-editor-bem-ConfirmWrapper_Modal {
  position: absolute;
  top: -5%;
  right: -5%;
  bottom: -5%;
  left: -5%;
  height: 110%;
  background: rgba(0, 0, 0, 0.75);
  z-index: 10000;
}
.w-editor-bem-DatePicker {
  width: 254px;
  color: #3B3B3B;
}
.w-editor-bem-DatePicker_Head {
  padding: 10px;
  background: white;
  border-bottom: 1px solid #333333;
}
.w-editor-bem-DatePicker_Title {
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-size: 14px;
  font-weight: 400;
  text-align: center;
}
.w-editor-bem-DatePicker_Body {
  padding: 0 8px;
}
.w-editor-bem-DatePicker_WeekDay,
.w-editor-bem-DatePicker_Day {
  display: inline-block;
  width: 30px;
  height: 30px;
  margin: 2px;
  line-height: 30px;
  text-align: center;
}
.w-editor-bem-DatePicker_WeekDay {
  font-weight: bold;
}
.w-editor-bem-DatePicker_Day {
  border-radius: 2px;
}
.w-editor-bem-DatePicker_Day-disabled {
  color: #737373;
}
.w-editor-bem-DatePicker_Day-activeCurrentMonth {
  cursor: default;
}
.w-editor-bem-DatePicker_Day-activeCurrentMonth:hover {
  background: white;
}
.w-editor-bem-DatePicker_Day-activeNotCurrentMonth {
  cursor: default;
  color: #737373;
}
.w-editor-bem-DatePicker_Day-activeNotCurrentMonth:hover {
  background: white;
}
.w-editor-bem-DatePicker_Day-current {
  position: relative;
  background: #2b2b2b;
}
.w-editor-bem-DatePicker_Day-current:after {
  content: "";
  position: absolute;
  right: 2px;
  bottom: 2px;
  border: 3px solid currentColor;
  border-top-color: transparent;
  border-left-color: transparent;
}
.w-editor-bem-DatePicker_Day-selected {
  color: #333;
  background: #3490eb;
  cursor: default;
}
.w-editor-bem-DatePicker_Day-selected:hover {
  background: #3490eb;
}
.w-editor-bem-DateTimeSwitch {
  margin-right: -1px;
  margin-bottom: -1px;
  padding-top: 1px;
  overflow: hidden;
}
.w-editor-bem-DateTimeSwitch_Cell {
  border: 1px solid #212121;
  margin-top: -1px;
  margin-left: -1px;
}
.w-editor-bem-DateTimeSwitch_Button {
  color: #3B3B3B;
  padding: 0 10px;
  height: 40px;
  opacity: 0.4;
  cursor: default;
}
.w-editor-bem-DateTimeSwitch_Button-selected,
.w-editor-bem-DateTimeSwitch_Button:hover {
  opacity: 1;
  background: white;
}
.w-editor-bem-DateTimeSwitch_Button-disabled,
.w-editor-bem-DateTimeSwitch_Button-disabled:hover {
  opacity: 0.4;
  cursor: not-allowed;
}
.w-editor-bem-DateTimeSwitch_Icon {
  margin-right: 10px;
  opacity: 0.7;
}
.w-editor-bem-FileDropZone.w-editor-clickable {
  cursor: default;
}
.w-editor-bem-FileDropZone.w-editor-clickable:hover,
.w-editor-bem-FileDropZone.w-editor-clickable:focus {
  background: white;
}
.w-editor-bem-FileDropZone.w-editor-isDropTarget {
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  background: white;
}
.w-editor-bem-Dropdown {
  display: inline-block;
  position: relative;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.w-editor-bem-Dropdown_Body {
  display: none;
  left: 0;
  margin-top: 5px;
  min-width: 100%;
  position: absolute;
  top: 100%;
  z-index: 1;
}
.w-editor-bem-Dropdown-top .w-editor-bem-Dropdown_Body {
  margin-top: 0;
  top: 0;
}
.w-editor-bem-Dropdown-right .w-editor-bem-Dropdown_Body {
  left: initial;
  right: 0;
}
.w-editor-bem-Dropdown.w-editor-isActive .w-editor-bem-Dropdown_Body {
  display: block;
  z-index: 36;
}
.w-editor-bem-Dropdown_Shield {
  bottom: 0;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  left: 0;
  margin: -100px;
  padding: 100px;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}
.w-editor-bem-Field {
  display: block;
}
.w-editor-bem-Field_Head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: end;
  -ms-flex-align: end;
  align-items: flex-end;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-bottom: 8px;
}
.w-editor-bem-Field_Head-nolabel {
  margin-bottom: 0px;
}
.w-editor-bem-Field_Label {
  max-width: 100%;
  -webkit-user-select: text;
  -moz-user-select: text;
  -ms-user-select: text;
  user-select: text;
  width: 100%;
}
.w-editor-bem-Field_Hint {
  color: #a6a6a6;
  display: block;
}
.w-editor-bem-Field_Hint-bottom {
  margin-top: 8px;
}
.w-editor-bem-Field_Head + .w-editor-bem-Field_Hint,
.w-editor-bem-View + .w-editor-bem-Field_Hint {
  margin-top: 4px;
}
.w-editor-bem-Field_Note {
  -ms-flex-item-align: end;
  align-self: flex-end;
  background-color: white;
  color: #3B3B3B;
  border-radius: 2px;
  padding: 2px 7px;
  margin-top: -20px;
  margin-bottom: 2px;
  position: relative;
  overflow: visible;
}
.w-editor-bem-Field_Note-error {
  background-color: #ea384c;
}
.w-editor-bem-Field_Group .w-editor-bem-Field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}
.w-editor-bem-Field_Group .w-editor-bem-Field + .w-editor-bem-Field {
  margin-top: 0;
  margin-left: 10px;
}
.w-editor-bem-Field_NoteArrow {
  overflow: hidden;
  position: absolute;
  padding: 0 2px;
  right: 14px;
  top: 100%;
}
.w-editor-bem-Field_NoteArrow::before {
  content: '';
  display: block;
  -webkit-box-shadow: 0 0 0 1px #333333;
  box-shadow: 0 0 0 1px #333333;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 10px;
  height: 10px;
  position: relative;
  top: -6px;
  background-color: white;
}
.w-editor-bem-Field_Note-error .w-editor-bem-Field_NoteArrow::before {
  background-color: #ea384c;
}
.w-editor-bem-Field_Warning {
  padding: 5px 7px;
  background-color: white;
  border: 1px solid #333333;
  border-radius: 2px;
  color: #facb4b;
  margin-top: 4px;
}
.w-editor-bem-Field_Notice {
  line-height: 26px;
}
.w-editor-bem-Field_Notice-focused {
  color: #facb4b;
}
.w-editor-bem-Field_Notice-focused.w-editor-bem-Field_Notice-severe {
  color: #ff5266;
  opacity: 0.9;
}
.w-editor-bem-Field_RequiredBadge {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  padding: 1px;
  line-height: 0;
  border-radius: 2px;
  -ms-flex-item-align: start;
  align-self: flex-start;
  margin: 0 5px;
}
.w-editor-bem-Field-inline {
  display: inline-block;
  position: relative;
}
.w-editor-bem-Field-inline .w-editor-bem-Note-error,
.w-editor-bem-Field-inline .w-editor-bem-Note {
  position: absolute;
  bottom: 36px;
  right: 0;
}
.w-editor-bem-Field-medium {
  width: calc(33.33333333% - 13.33333333px);
}
.w-editor-bem-Field-medium:first-child {
  margin-left: 0;
  margin-top: 20px;
}
.w-editor-bem-Field-small {
  max-width: 350px;
}
.w-editor-bem-Field-half {
  width: calc(50% - 10px);
}
.w-editor-bem-Field-half:nth-of-type(2n + 3) {
  margin-left: 0;
  margin-top: 20px;
}
.w-editor-bem-Field-third {
  width: calc(33.33333333% - 13.33333333px);
}
.w-editor-bem-Field-third > .w-editor-bem-Field_Head {
  position: relative;
}
.w-editor-bem-Field-third > .w-editor-bem-Field_Head > .w-editor-bem-Note-error,
.w-editor-bem-Field-third > .w-editor-bem-Field_Head > .w-editor-bem-Note {
  position: absolute;
  bottom: 0;
  right: 0;
}
.w-editor-bem-Field-half > .w-editor-bem-Field_Head {
  position: relative;
}
.w-editor-bem-Field-half > .w-editor-bem-Field_Head > .w-editor-bem-Note-error,
.w-editor-bem-Field-half > .w-editor-bem-Field_Head > .w-editor-bem-Note {
  position: absolute;
  bottom: 0;
  right: 0;
}
.w-editor-bem-FileInput_Input {
  display: none;
}
.w-editor-bem-FileInput.w-editor-bem-Button {
  position: relative;
  overflow: hidden;
}
.w-editor-bem-FileInput.w-editor-bem-Button:disabled,
.w-editor-bem-FileInput.w-editor-bem-Button[disabled] {
  opacity: 0.5;
}
.w-editor-bem-FileInput.w-editor-bem-Button .w-editor-bem-FileInput_Input {
  display: block;
  position: absolute;
  left: 0;
  top: -100%;
  width: 100%;
  height: 200%;
  opacity: 0;
  cursor: default;
}
.w-editor-bem-FileInput.w-editor-bem-Button:disabled .w-editor-bem-FileInput_Input,
.w-editor-bem-FileInput.w-editor-bem-Button[disabled] .w-editor-bem-FileInput_Input {
  cursor: not-allowed;
  pointer-events: none;
}
.w-editor-bem-FileInput:disabled,
.w-editor-bem-FileInput[disabled] {
  cursor: not-allowed;
}
.w-editor-bem-GuidanceTooltip {
  color: #e6e6e6;
}
.w-editor-bem-GuidanceTooltip_Body {
  max-width: 224px;
  padding: 5px 10px;
  font-size: 12px;
  color: #1a1a1a;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.w-editor-bem-HintButton {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 15px;
  min-width: 15px;
  padding: 0;
  cursor: help;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.w-editor-bem-HintButton:hover {
  background: #5e5e5e;
}
/**
 * 1. The button shifts 1px on hover in Safari without this.
 */
.w-editor-bem-IconButton {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  text-decoration: none;
  padding: 10px;
  cursor: default;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  /* 1 */
  opacity: 0.5;
  -webkit-transition: opacity 200ms;
  transition: opacity 200ms;
}
.w-editor-bem-IconButton:hover {
  opacity: 1;
}
.w-editor-bem-InlineField {
  display: inline-block;
  margin-top: 7px;
  -webkit-user-select: auto;
  -moz-user-select: auto;
  -ms-user-select: auto;
  user-select: auto;
}
.w-editor-bem-InlineField_Foot {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.w-editor-bem-Note {
  -ms-flex-item-align: end;
  align-self: flex-end;
  background-color: #5e5e5e;
  color: #333;
  border-radius: 2px;
  padding: 2px 7px;
  -webkit-box-shadow: 0 0 0 1px #333333;
  box-shadow: 0 0 0 1px #333333;
  margin-top: -24px;
  margin-bottom: 2px;
  position: relative;
  overflow: visible;
  font-weight: 200;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  font-size: 12px;
  line-height: 1.5;
}
.w-editor-bem-Note-error {
  background-color: #c92c3f;
  font-weight: 400;
}
.w-editor-bem-Note-warning {
  background-color: #c28f0e;
}
.w-editor-bem-Note-below {
  top: 33px;
  margin-top: -26px;
  margin-bottom: 15px;
}
.w-editor-bem-Note-below .w-editor-bem-Note_Arrow {
  top: -10px;
  right: auto;
  left: 14px;
}
.w-editor-bem-Note-below .w-editor-bem-Note_Arrow-left {
  right: auto;
  left: 14px;
}
.w-editor-bem-Note-below .w-editor-bem-Note_Arrow-right {
  right: 14px;
  left: auto;
}
.w-editor-bem-Note-below .w-editor-bem-Note_Arrow::before {
  top: 6px;
}
.w-editor-bem-Note_Arrow {
  overflow: hidden;
  position: absolute;
  padding: 0 2px;
  right: 14px;
  top: 100%;
}
.w-editor-bem-Note_Arrow-left {
  right: auto;
  left: 14px;
}
.w-editor-bem-Note_Arrow-right {
  right: 14px;
  left: auto;
}
.w-editor-bem-Note_Arrow::before {
  content: '';
  display: block;
  -webkit-box-shadow: 0 0 0 1px #333333;
  box-shadow: 0 0 0 1px #333333;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 10px;
  height: 10px;
  position: relative;
  top: -6px;
  background-color: #5e5e5e;
}
.w-editor-bem-Note_Text {
  margin: 0 2px;
}
.w-editor-bem-Note-error .w-editor-bem-Note_Arrow::before {
  background-color: #c92c3f;
}
.w-editor-bem-Note-warning .w-editor-bem-Note_Arrow::before {
  background-color: #c28f0e;
}
.w-editor-bem-Heading {
  margin: 0;
  padding: 0;
  font-weight: normal;
  color: #ebebeb;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
}
.w-editor-bem-Heading-center {
  text-align: center;
}
.w-editor-bem-Heading-dim {
  color: #3B3B3B;
}
.w-editor-bem-Heading-isolate {
  margin: 10px 0;
}
.w-editor-bem-Heading-h1 {
  font-size: 20px;
  line-height: 24px;
}
.w-editor-bem-Heading-h2 {
  font-size: 20px;
  line-height: 24px;
}
.w-editor-bem-Heading-h3 {
  font-size: 18px;
  line-height: 22px;
  font-weight: 500;
}
.w-editor-bem-Heading-h4 {
  font-size: 16px;
  line-height: 20px;
  font-weight: 500;
}
.w-editor-bem-Heading-h5 {
  font-size: 12px;
  line-height: 16px;
  font-weight: 600;
}
.w-editor-bem-Heading + .w-editor-bem-Heading_Text {
  line-height: 1.4em;
}
.w-editor-bem-Icon {
  vertical-align: middle;
  position: relative;
}
.w-editor-bem-Icon-dim {
  opacity: 0.4;
}
.w-editor-bem-ImageInput {
  border-radius: 2px;
}
.w-editor-bem-ImageInput_Csv {
  height: 170px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.w-editor-bem-ImageInput_Csv-preview {
  background: #4d4d4d;
  color: #a9a9a9;
  border: 1px solid #6b6b6b;
}
.w-editor-bem-ImageInput_Csv.w-editor-hasNotice {
  background: #6f6452;
  border-color: #9e8863;
  color: #B99f76;
}
.w-editor-bem-ImageInput_Csv.w-editor-highlighted {
  background: rgba(107, 176, 255, 0.35);
  border-color: rgba(107, 176, 255, 0.8);
  color: white;
}
.w-editor-bem-ImageInput.w-editor-hasError,
.w-editor-bem-ImageInput_Csv.w-editor-hasError {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
  overflow: hidden;
}
.w-editor-bem-ImageInput.w-editor-hasError > input.w-editor-input,
.w-editor-bem-ImageInput_Csv.w-editor-hasError > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-ImageInput_Controls {
  margin-top: 10px;
}
.w-editor-bem-MultiImageInput_Csv {
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 4px;
  border-radius: 2px;
}
.w-editor-bem-MultiImageInput_Csv-empty {
  height: 170px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border: 1px solid #6b6b6b;
  background: #4d4d4d;
  border-color: #6b6b6b;
}
.w-editor-bem-MultiImageInput_Csv-preview {
  color: #a9a9a9;
  border: 1px solid #6b6b6b;
  padding: 5px;
  background: #4d4d4d;
  border-color: #6b6b6b;
}
.w-editor-bem-MultiImageInput_Csv.w-editor-hasNotice {
  background: #6f6452;
  border-color: #9e8863;
  color: #B99f76;
}
.w-editor-bem-MultiImageInput_Csv.w-editor-highlighted {
  background: rgba(107, 176, 255, 0.35);
  border-color: rgba(107, 176, 255, 0.8);
  color: white;
}
.w-editor-bem-MultiImageInput_Csv.w-editor-hasError,
.w-editor-bem-MultiImageInput_Csv_Csv.w-editor-hasError {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
  overflow: hidden;
}
.w-editor-bem-MultiImageInput_Csv.w-editor-hasError > input.w-editor-input,
.w-editor-bem-MultiImageInput_Csv_Csv.w-editor-hasError > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-MultiImageInput_Csv_Controls {
  margin-top: 10px;
}
.w-editor-bem-ImagePreview {
  height: 100%;
  padding: 8px;
  border: 1px solid #D1D1D1;
  border-radius: 2px;
  background: #fcfcfc;
  color: #3B3B3B;
  position: relative;
}
.w-editor-bem-ImagePreview_Image {
  margin: auto;
  width: auto;
  height: auto;
  max-height: 100%;
  max-width: 100%;
}
.w-editor-bem-ImagePreview.w-editor-isDropTarget {
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  background: white;
}
.w-editor-bem-ImagePreview-preview {
  border: none;
  background: none;
  padding: 4px;
}
.w-editor-bem-Link {
  cursor: default;
  color: inherit;
}
.w-editor-bem-Link + .w-editor-bem-Link {
  margin-left: 12px;
}
.w-editor-bem-Link:hover {
  color: #ebebeb;
}
.w-editor-bem-Link:hover .w-editor-bem-Link_Icon {
  opacity: 1;
}
.w-editor-bem-Link_Icon {
  opacity: 0.6;
}
.w-editor-bem-Link-underline {
  text-decoration: underline;
}
.w-editor-bem-Link-disabled {
  cursor: default;
}
.w-editor-bem-Link-dim,
.w-editor-bem-Link-disabled,
.w-editor-bem-Link-disabled:hover {
  color: #a6a6a6;
}
.w-editor-bem-Link-dim .w-editor-bem-Link_Icon,
.w-editor-bem-Link-disabled .w-editor-bem-Link_Icon,
.w-editor-bem-Link-disabled:hover .w-editor-bem-Link_Icon {
  opacity: 0.4;
}
.w-editor-bem-Link-stretch {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.w-editor-bem-Link-outbound {
  cursor: pointer;
}
.w-editor-bem-List {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}
.w-editor-bem-List_Row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 32px;
  flex: 0 0 32px;
  min-height: 32px;
  padding: 0 11px;
  border-bottom: 1px solid #212121;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.w-editor-bem-List_Row-big {
  min-height: 45px;
  -ms-flex-preferred-size: 45px;
  flex-basis: 45px;
}
.w-editor-bem-List_Row-clickable {
  cursor: default;
}
.w-editor-bem-List_Row.w-editor-isSelected {
  background-color: white;
  color: white;
}
.w-editor-bem-List_Row-clickable:hover .w-editor-bem-List_Icon,
.w-editor-bem-List_Row.w-editor-isSelected .w-editor-bem-List_Icon {
  opacity: 0.8;
}
.w-editor-bem-List_Row-draggable {
  padding-left: 0px;
}
.w-editor-bem-List_DragHandle {
  visibility: hidden;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 11px;
  flex: 0 0 11px;
  -ms-flex-item-align: stretch;
  -ms-grid-row-align: stretch;
  align-self: stretch;
  opacity: 0.35;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAuCAYAAAALM2gTAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpi5ODg+M+ABTAx4ACM/4GAJB2kA8ZRV426atRVw95VAAEGAOeKKMnBEHdEAAAAAElFTkSuQmCC);
  background-size: 3px 23px;
  background-repeat: no-repeat;
  background-position: 3px 3px;
  cursor: ns-resize;
}
.w-editor-bem-List_DragHandle:hover {
  opacity: 0.7;
}
.w-editor-bem-List_Row:hover .w-editor-bem-List_DragHandle,
.w-editor-bem-List_Row.w-editor-isSource .w-editor-bem-List_DragHandle {
  visibility: visible;
}
.w-editor-bem-List_Cell + .w-editor-bem-List_Cell,
.w-editor-bem-List_Action + .w-editor-bem-List_Action,
.w-editor-bem-List_Cell + .w-editor-bem-List_Action {
  margin-left: 8px;
}
.w-editor-bem-List_Icon {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  opacity: 0.6;
}
.w-editor-bem-List_Action {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
}
.w-editor-bem-List_Cell-shy,
.w-editor-bem-List_Action-shy {
  display: none;
}
.w-editor-bem-List_Row:hover > .w-editor-bem-List_Cell-shy,
.w-editor-bem-List_Row:hover > .w-editor-bem-List_Action-shy,
.w-editor-bem-List_Row:hover > * > .w-editor-bem-List_Cell-shy,
.w-editor-bem-List_Row:hover > * > .w-editor-bem-List_Action-shy {
  display: block;
}
.w-editor-bem-List_Row:hover .w-editor-bem-List_Cell-unshy,
.w-editor-bem-List_Row:hover .w-editor-bem-List_Action-unshy {
  display: none;
}
.w-editor-bem-List_Row-big .w-editor-bem-List_Cell {
  padding: 0 1px;
}
.w-editor-bem-List-flat {
  border: 2px solid #5e5e5e;
  -webkit-box-shadow: 0 0 0 1px #333333;
  box-shadow: 0 0 0 1px #333333;
  border-bottom: 0;
  border-radius: 3px;
}
.w-editor-bem-List-flat .w-editor-bem-List_Row {
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 8px 10px;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-bottom: 2px solid #5e5e5e;
}
.w-editor-bem-List-flat .w-editor-bem-List_Row-editable {
  padding: 0;
}
.w-editor-bem-List_Row-editable .w-editor-bem-List_Cell {
  padding: 8px 10px;
  position: relative;
  cursor: default;
}
.w-editor-bem-List_Row-editable .w-editor-bem-List_Cell:hover,
.w-editor-bem-List_Row-editable .w-editor-bem-List_Cell:focus {
  outline: 0;
}
.w-editor-bem-List_Row-editable .w-editor-bem-List_Cell:focus {
  cursor: text;
  background: #fcfcfc;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
}
.w-editor-bem-List_Row-editable .w-editor-bem-List_Cell:focus::after {
  content: 'Press enter to save';
  position: absolute;
  right: 10px;
  color: #737373;
}
.w-editor-bem-List_Row-editable .w-editor-bem-List_Cell + .w-editor-bem-List_Action {
  margin-left: 0;
}
.w-editor-bem-List_Row-editable .w-editor-bem-List_Cell:focus ~ .w-editor-bem-List_Action-shy {
  display: none;
}
.w-editor-bem-List-flat .w-editor-bem-List_Row.w-editor-isSource,
.w-editor-bem-List_Row.w-editor-isSource {
  border-bottom-color: #787878;
}
.w-editor-bem-Menu {
  border-radius: 3px;
  color: #3B3B3B;
  -webkit-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2);
  border: 1px solid #212121;
  background: white;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  letter-spacing: 0;
}
.w-editor-bem-Menu_Caret {
  margin-left: 35px;
}
.w-editor-bem-Menu_Shortcut {
  margin-left: 10px;
}
.w-editor-bem-Menu_Section {
  margin: 3px 0;
}
.w-editor-bem-Menu_Section + .w-editor-bem-Menu_Section {
  border-top: 1px solid #212121;
  margin-top: 3px;
  padding-top: 3px;
}
.w-editor-bem-Menu_Item {
  font-size: 12px;
  padding: 4px 15px;
  line-height: 19px;
  white-space: nowrap;
  position: relative;
  cursor: default;
}
.w-editor-bem-Menu_Item:hover {
  background: #5e5e5e;
  color: white;
}
.w-editor-bem-Menu_Item-selectable {
  padding-left: 0;
}
.w-editor-bem-Menu_Item-disabled {
  opacity: 0.4;
  cursor: not-allowed;
}
.w-editor-bem-Menu_Item-disabled:hover {
  color: inherit;
  background: white;
}
.w-editor-bem-Menu_Item-visuallyDisabled {
  opacity: 0.4;
}
.w-editor-bem-Menu_Item_Icon {
  width: 30px;
}
.w-editor-bem-Menu_Item > .w-editor-bem-Menu {
  position: absolute;
  left: 100%;
  top: -4px;
  visibility: hidden;
}
.w-editor-bem-Menu.w-editor-isOnLeft .w-editor-bem-Menu_Item > .w-editor-bem-Menu {
  left: auto;
  right: 100%;
}
.w-editor-bem-Menu_Item:hover > .w-editor-bem-Menu {
  visibility: visible;
}
.w-editor-bem-Menu_Item > .w-editor-bem-Menu .w-editor-bem-Menu_Item .w-editor-bem-Icon {
  opacity: 0.7;
}
.w-editor-bem-Menu_Item > .w-editor-bem-Menu .w-editor-bem-Menu_Item:hover .w-editor-bem-Icon {
  opacity: 1;
}
.w-editor-bem-Menu_Item > .w-editor-bem-Menu .w-editor-bem-Menu_Item-selected .w-editor-bem-Icon {
  opacity: 1;
}
.w-editor-bem-Modal {
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  /**
   * 1. The button shifts 1px on hover in Safari without this.
   */
}
.w-editor-bem-Modal_Card {
  max-width: 100%;
  background: #404040;
  color: #3B3B3B;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3), 0 4px 24px rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3), 0 4px 24px rgba(0, 0, 0, 0.2);
  border-radius: 3px;
}
.w-editor-bem-Modal_Head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 42px;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  border-radius: 3px 3px 0 0;
  border-bottom: 1px solid #212121;
  background-color: white;
}
.w-editor-bem-Modal_Title {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  padding-left: 16px;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-size: 15px;
  font-weight: 500;
  text-transform: capitalize;
}
.w-editor-bem-Modal_Close,
.w-editor-bem-Modal_Fullscreen,
.w-editor-bem-Modal_LineWrapping {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  height: 100%;
  padding: 0 16px;
  cursor: default;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  /* 1 */
  opacity: 0.5;
  -webkit-transition: opacity 200ms;
  transition: opacity 200ms;
}
.w-editor-bem-Modal_Close:hover,
.w-editor-bem-Modal_Fullscreen:hover,
.w-editor-bem-Modal_LineWrapping:hover {
  opacity: 1;
}
.w-editor-bem-Modal_Close--active,
.w-editor-bem-Modal_Fullscreen--active,
.w-editor-bem-Modal_LineWrapping--active {
  opacity: 1;
}
.w-editor-bem-Modal_HeadIconSeparator {
  border-right: 1px solid #212121;
  height: 100%;
}
.w-editor-bem-Modal_Body {
  border-radius: 0 0 3px 3px;
  padding: 16px;
}
.w-editor-bem-Modal_Message {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 448px;
  padding: 3px 0;
}
.w-editor-bem-Modal_MessageIcon {
  margin-right: 20px;
  margin-left: 5px;
  color: inherit;
}
.w-editor-bem-Modal_MessageText {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  font-size: 14px;
  line-height: 135%;
}
.w-editor-bem-Modal_MessageText a,
.w-editor-bem-Modal_MessageText a:visited {
  color: #6bb0ff;
  text-decoration: none;
}
.w-editor-bem-Modal_Controls {
  margin-top: 16px;
  text-align: right;
}
.w-editor-bem-Notification {
  padding: 11px 13px;
  color: #d9d9d9;
  font-size: 12px;
  line-height: 16px;
  background: rgba(26, 26, 26, 0.95);
  background-clip: padding-box;
  border-left: 3px solid;
  border-radius: 3px;
  -webkit-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2);
  /**
   * 1. Prevents text from flowing underneath icon.
   */
  /**
   * 1. Prevents text from going underneath floating action.
   */
}
.w-editor-bem-Notification-error {
  color: #ea384c;
}
.w-editor-bem-Notification-warning {
  color: #facb4b;
}
.w-editor-bem-Notification-success {
  color: #2cc786;
}
.w-editor-bem-Notification-love {
  color: #e437ff;
}
.w-editor-bem-Notification_Icon {
  float: left;
  height: 16px;
  margin-right: 12px;
}
.w-editor-bem-Notification_Body {
  color: #d9d9d9;
  overflow: hidden;
  /* 1 */
}
.w-editor-bem-Notification_Title {
  margin-bottom: 5px;
  font-size: 13px;
  line-height: 16px;
  color: white;
}
.w-editor-bem-Notification_Message {
  overflow: hidden;
  /* 1 */
}
.w-editor-bem-Notification_CTA {
  margin-top: 5px;
}
.w-editor-bem-Notification_Action {
  float: right;
  margin-left: 10px;
  cursor: default;
}
.w-editor-bem-NotificationList {
  position: absolute;
  top: 35px;
  right: 0;
  margin: 10px;
  z-index: 10002;
}
.w-editor-bem-NotificationList-inWorkspace {
  right: 241px;
}
.w-editor-bem-NotificationList-scrollBarEnabled {
  right: 251px;
}
.w-editor-bem-NotificationList-inDataManager,
.w-editor-bem-NotificationList-inCommerceSettings,
.w-editor-bem-NotificationList-inSiteUsersManager {
  top: 80px;
  right: 10px;
}
.w-editor-bem-NotificationList-inMailSettings,
.w-editor-bem-NotificationList-inDataManagerSettings {
  right: 10px;
}
.w-editor-bem-NotificationList-isBelowPreviewLinkSignupBanner {
  top: 71px;
}
.w-editor-bem-NotificationList-inDataManager.w-editor-bem-NotificationList-isBelowPreviewLinkSignupBanner,
.w-editor-bem-NotificationList-inCommerceSettings.w-editor-bem-NotificationList-isBelowPreviewLinkSignupBanner,
.w-editor-bem-NotificationList-inSiteUsersManager.w-editor-bem-NotificationList-isBelowPreviewLinkSignupBanner {
  top: 116px;
}
.w-editor-bem-NotificationList_Item {
  width: 265px;
}
.w-editor-bem-NotificationList_Item + .w-editor-bem-NotificationList_Item {
  margin-top: 10px;
}
.w-editor-bem-Pane {
  background: #404040;
  border: 1px solid #212121;
  color: #3B3B3B;
  font-size: 12px;
  line-height: 16px;
  overflow: hidden;
  pointer-events: auto;
  -webkit-box-flex: 0;
  -ms-flex-positive: 0;
  flex-grow: 0;
}
.w-editor-bem-Pane ::selection {
  background-color: #3490eb;
  color: white;
}
.w-editor-bem-Pane-lift {
  position: relative;
}
.w-editor-bem-Pane + .w-editor-bem-Pane {
  border-left: 0;
}
.w-editor-bem-Pane_Head {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #3B3B3B;
  background: white;
  padding: 0 10px;
  height: 45px;
}
.w-editor-bem-Pane_Body {
  position: relative;
  overflow: auto;
}
.w-editor-bem-Pane_Body_Inner {
  -ms-flex-item-align: stretch;
  -ms-grid-row-align: stretch;
  align-self: stretch;
}
.w-editor-bem-Pane_Head + .w-editor-bem-Pane_Body {
  border-top: 1px solid #212121;
}
.w-editor-bem-Pane_Head + .w-editor-bem-Pane_Body-well {
  border-top: none;
}
.w-editor-bem-Pane_Foot {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #3B3B3B;
  background: white;
  border-top: 1px solid #212121;
  border-bottom: 1px solid #212121;
  padding: 0 10px;
  height: 50px;
}
.w-editor-bem-Pane_Message {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 6px;
  padding-bottom: 6px;
  padding-right: 10px;
  background: white;
  color: #3B3B3B;
  border-radius: 2px;
  border: 1px solid #333333;
  -webkit-box-shadow: inset 23px 0 0 -20px #3B3B3B;
  box-shadow: inset 23px 0 0 -20px #3B3B3B;
  margin-top: 8px;
}
.w-editor-bem-Pane_Message-locked {
  -webkit-box-shadow: inset 23px 0 0 -20px #facb4b;
  box-shadow: inset 23px 0 0 -20px #facb4b;
}
.w-editor-bem-Pane_Message-warning {
  -webkit-box-shadow: inset 23px 0 0 -20px #facb4b;
  box-shadow: inset 23px 0 0 -20px #facb4b;
}
.w-editor-bem-Pane_Message-dynamic {
  -webkit-box-shadow: inset 23px 0 0 -20px #ae94ff;
  box-shadow: inset 23px 0 0 -20px #ae94ff;
}
.w-editor-bem-Pane_Message-page {
  -webkit-box-shadow: inset 23px 0 0 -20px #2ad986;
  box-shadow: inset 23px 0 0 -20px #2ad986;
}
.w-editor-bem-Pane_Message-info {
  -webkit-box-shadow: inset 23px 0 0 -20px #3B3B3B;
  box-shadow: inset 23px 0 0 -20px #3B3B3B;
}
.w-editor-bem-Pane_Message-danger {
  -webkit-box-shadow: inset 13px 0 0 -10px #FB6B6F;
  box-shadow: inset 13px 0 0 -10px #FB6B6F;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background: #4d4d4d;
}
.w-editor-bem-Pane_Message_Icon {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  position: relative;
  left: 12px;
}
.w-editor-bem-Pane_Message_Icon-locked {
  color: #facb4b;
}
.w-editor-bem-Pane_Message_Icon-warning {
  -ms-flex-item-align: initial;
  -ms-grid-row-align: initial;
  align-self: initial;
  color: #facb4b;
}
.w-editor-bem-Pane_Message_Icon-dynamic {
  color: #ae94ff;
  -webkit-transform: scale(1.5);
  transform: scale(1.5);
}
.w-editor-bem-Pane_Message_Icon-page {
  color: #2ad986;
}
.w-editor-bem-Pane_Message_Icon-info {
  -ms-flex-item-align: initial;
  -ms-grid-row-align: initial;
  align-self: initial;
  color: #3B3B3B;
}
.w-editor-bem-Pane_Message_Icon-danger {
  color: #FB6B6F;
}
.w-editor-bem-Pane_Message_Content {
  display: inline-block;
  margin-left: 12px;
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
}
.w-editor-bem-Pane_Message_Icon + .w-editor-bem-Pane_Message_Content {
  margin-left: 20px;
}
.w-editor-bem-Pane_Card {
  position: relative;
  background: white;
  border-radius: 3px;
  border: 1px solid #333333;
  margin: 15px 8px;
  padding: 12px 14px;
  text-align: center;
}
.w-editor-bem-Pane_Card-spacious {
  margin: auto;
  padding: 25px 70px;
}
.w-editor-bem-Pane_CardHead {
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-weight: 600;
  font-size: 13px;
  margin-bottom: 5px;
}
.w-editor-bem-Pane_CardBody {
  font-size: 11px;
  line-height: 15px;
  color: #222222;
}
.w-editor-bem-Pane_CardFooter {
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px solid #333333;
}
.w-editor-bem-Pane_CardClose {
  position: absolute;
  top: 8px;
  right: 8px;
  line-height: 0;
}
.w-editor-bem-Pane_Section {
  padding: 16px 12px;
}
.w-editor-bem-Pane_Section + .w-editor-bem-Pane_Section {
  border-top: 1px solid #212121;
}
.w-editor-bem-Pane_Title {
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-weight: 400;
  margin: 0 10px 0 0;
  overflow-x: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  padding: 3px 0;
}
.w-editor-bem-Pane_Title_Icon {
  margin-left: 10px;
  opacity: 0.3;
  cursor: default;
}
.w-editor-bem-Pane_Title_Icon:hover {
  opacity: 1;
}
.w-editor-bem-Pane_Close {
  display: inline-block;
  cursor: default;
  opacity: 0.4;
}
.w-editor-bem-Pane_Close:hover {
  opacity: 0.85;
}
.w-editor-bem-Pane_CloseIcon {
  background-position: 0;
  height: 12px;
  width: 11px;
}
.w-editor-bem-Pane_Actions {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.w-editor-bem-Pane_Actions + .w-editor-bem-Pane_Actions {
  -webkit-box-flex: 0;
  -ms-flex-positive: 0;
  flex-grow: 0;
  margin-left: 8px;
}
.w-editor-bem-Pane_Close + .w-editor-bem-Pane_Actions {
  margin-left: 8px;
}
.w-editor-bem-Pane_Actions-divided {
  border-right: 1px solid #333333;
  padding-right: 8px;
}
.w-editor-bem-Pane_Icon {
  opacity: 0.6;
  width: 17px;
}
.w-editor-bem-Pane-tab {
  border: 0;
}
.w-editor-bem-Pane-tab .w-editor-bem-Pane_Head {
  background: #404040;
  -webkit-box-shadow: none;
  box-shadow: none;
  height: 36px;
}
.w-editor-bem-Panel {
  padding-left: 6px;
  pointer-events: none;
  color: #3B3B3B;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: default;
}
.w-editor-bem-Panel::before {
  background: white;
  border-right: 1px solid #212121;
  bottom: 0;
  content: '';
  display: block;
  left: 0;
  position: absolute;
  top: 1px;
  width: 6px;
  pointer-events: auto;
}
.w-editor-bem-Panel_Head {
  height: 35px;
  background: #404040;
  font-size: 11px;
  pointer-events: auto;
  position: absolute;
  top: 0;
  margin-top: -34px;
  left: 0;
  right: 0;
  border-bottom: 1px solid #212121;
}
.w-editor-bem-Panel_Head_Section {
  padding: 0 10px;
}
.w-editor-bem-Panel_Head_Section + .w-editor-bem-Panel_Head_Section {
  border-left: 1px solid #212121;
}
.w-editor-bem-Paragraph {
  margin: 0;
  font-size: 12px;
  line-height: 14px;
}
.w-editor-bem-Paragraph-dim {
  color: #a6a6a6;
}
.w-editor-bem-Paragraph-dimmer {
  color: #737373;
}
.w-editor-bem-Paragraph-dimmer > em {
  color: #a6a6a6;
  font-style: normal;
}
.w-editor-bem-Paragraph-small {
  font-size: 12px;
}
.w-editor-bem-Pill {
  background-color: white;
  -webkit-box-shadow: 0 0 0 1px #333333;
  box-shadow: 0 0 0 1px #333333;
  padding: 3px 9px;
  border-radius: 2px;
  -webkit-user-select: text;
  -moz-user-select: text;
  -ms-user-select: text;
  user-select: text;
  cursor: text;
}
.w-editor-bem-Pill.w-editor-isFocused {
  background: white;
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  cursor: text;
}
.w-editor-bem-Pill.w-editor-hasError {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
}
.w-editor-bem-Pill.w-editor-hasError > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-Pill-covermargin {
  position: relative;
  margin-left: 7px;
}
.w-editor-bem-Pill-covermargin::before {
  content: '';
  display: block;
  position: absolute;
  width: 7px;
  left: -7px;
  top: 0;
  bottom: 0;
}
.w-editor-bem-PopoverMenu {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  padding: 7px;
  -webkit-transform-origin: top left;
  transform-origin: top left;
}
.w-editor-bem-PopoverMenu-bottomLeft {
  top: auto;
  bottom: 0;
  -webkit-transform-origin: bottom left;
  transform-origin: bottom left;
}
.w-editor-bem-PopoverMenu-topRight {
  left: auto;
  right: 0;
  -webkit-transform-origin: top right;
  transform-origin: top right;
}
.w-editor-bem-PopoverMenu:after {
  content: "";
  position: absolute;
  z-index: -1;
  top: 7px;
  right: 7px;
  bottom: 7px;
  left: 7px;
  border-radius: 2px;
  -webkit-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2);
}
.w-editor-bem-PopoverMenu_Button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  cursor: default;
  padding-right: 30px;
  height: 42px;
  background: #404040;
  border: 1px solid #212121;
  color: #3B3B3B;
  white-space: nowrap;
  font-size: 14px;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.w-editor-bem-PopoverMenu_Button:hover {
  background: white;
}
.w-editor-bem-PopoverMenu_Button:active > * {
  opacity: 0.6;
}
.w-editor-bem-PopoverMenu_ButtonIcon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 44px;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.w-editor-bem-PopoverMenu_Button + .w-editor-bem-PopoverMenu_Button {
  border-top: none;
}
.w-editor-bem-PopoverMenu_Button:first-child {
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.w-editor-bem-PopoverMenu_Button:last-child {
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
}
.w-editor-bem-EditablePill {
  cursor: default;
}
.w-editor-bem-EditablePill_Icon {
  position: relative;
  opacity: 0.4;
}
.w-editor-bem-EditablePill_Input {
  word-break: break-all;
  padding-left: 1px;
  vertical-align: bottom;
  outline: none;
}
.w-editor-bem-ProfilePictures {
  overflow: hidden;
}
.w-editor-bem-ProfilePictures_Profile {
  border: 0 solid transparent;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
.w-editor-bem-ProfilePictures_Profile:nth-child(1) {
  z-index: 5;
}
.w-editor-bem-ProfilePictures_Profile:nth-child(2) {
  z-index: 4;
}
.w-editor-bem-ProfilePictures_Profile:nth-child(3) {
  z-index: 3;
}
.w-editor-bem-ProfilePictures_Profile:nth-child(4) {
  z-index: 2;
}
.w-editor-bem-ProfilePictures_Profile:nth-child(5) {
  z-index: 1;
}
.w-editor-bem-ProfilePictures_Profile:hover {
  z-index: 6;
}
.w-editor-bem-EditorMainMenu .w-editor-bem-ProfilePictures_Profile {
  border-color: #E4E4E4;
}
.w-editor-bem-BottomBar .w-editor-bem-ProfilePictures_Profile {
  border-color: #ebebeb;
}
.w-editor-bem-Pane_Head .w-editor-bem-ProfilePictures_Profile {
  border-color: white;
}
.w-editor-bem-Panel_Head .w-editor-bem-ProfilePictures_Profile {
  border-color: #404040;
}
.w-editor-bem-EditorApp_Panel .w-editor-bem-Pane_Head .w-editor-bem-ProfilePictures_Profile {
  border-color: #F7F7F7;
}
.w-editor-bem-Table_Row .w-editor-bem-ProfilePictures_Profile {
  border-color: #404040;
}
.w-editor-bem-Table_Row:hover .w-editor-bem-ProfilePictures_Profile,
.w-editor-bem-Table_Row.w-editor-isSelected .w-editor-bem-ProfilePictures_Profile {
  border-color: white;
}
.w-editor-bem-EditorApp_Panel .w-editor-bem-Table_Row .w-editor-bem-ProfilePictures_Profile {
  border-color: white;
}
.w-editor-bem-EditorApp_Panel .w-editor-bem-Table_Row:hover .w-editor-bem-ProfilePictures_Profile,
.w-editor-bem-EditorApp_Panel .w-editor-bem-Table_Row.w-editor-isSelected .w-editor-bem-ProfilePictures_Profile {
  border-color: #F4F8FC;
}
.w-editor-bem-ProfilePicture {
  color: white;
  position: relative;
  text-align: center;
  border-radius: 100px;
}
.w-editor-bem-ProfilePicture_Text,
.w-editor-bem-ProfilePicture_Image,
.w-editor-bem-ProfilePicture::after {
  left: 0;
  position: absolute;
  top: 0;
  height: 100%;
  width: 100%;
  border-radius: 100px;
}
.w-editor-bem-ProfilePicture::after {
  content: '';
}
.w-editor-bem-ProfilePicture_Image {
  -o-object-fit: cover;
  object-fit: cover;
}
.w-editor-bem-RadioSelectInput_Input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  border-radius: 100px;
  background: #fcfcfc;
  border: 1px solid #D1D1D1;
  color: #3B3B3B;
  position: relative;
}
.w-editor-bem-RadioSelectInput_Input:hover {
  background: white;
}
.w-editor-bem-RadioSelectInput_Input:focus {
  outline: none;
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  background: white;
}
.w-editor-bem-RadioSelectInput_Input:checked::before {
  background: #3B3B3B;
  border-radius: 100px;
  content: "";
  left: 0;
  right: 0;
  margin: 4px;
  position: absolute;
  top: 0;
  bottom: 0;
}
.w-editor-bem-RadioSelectInput_Label {
  margin-left: 10px;
  margin-top: 1px;
}
.w-editor-bem-RadioSelectInput_Option + .w-editor-bem-RadioSelectInput_Option {
  margin-top: 8px;
}
.w-editor-bem-SelectInput {
  position: relative;
  height: 32px;
  border-radius: 2px;
}
.w-editor-bem-SelectInput:focus {
  outline: none;
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
}
.w-editor-bem-SelectInput.w-editor-hasError {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
}
.w-editor-bem-SelectInput.w-editor-hasError > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-SelectInput-disabled {
  pointer-events: none;
  opacity: 0.7;
}
.w-editor-bem-SelectInput-preview {
  opacity: 1;
}
.w-editor-bem-SelectInput-legacyFancySelect {
  height: 24px;
}
.w-editor-bem-SelectInput_Trigger {
  border-radius: 2px;
  background: #5e5e5e;
  border: 1px solid #333333;
  height: 32px;
  width: 100%;
  line-height: 30px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: left;
  color: #333;
}
.w-editor-bem-SelectInput_Trigger-legacyFancySelect {
  height: 24px;
}
.w-editor-bem-SelectInput_Trigger:hover {
  background: #6b6b6b;
  cursor: default;
}
.w-editor-bem-SelectInput_Trigger.w-editor-isExpanded:before {
  content: '';
  width: 0;
  height: 0;
  position: absolute;
  right: 10px;
  bottom: 14px;
  border-bottom: 5px solid #333;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  pointer-events: none;
}
.w-editor-bem-SelectInput_Trigger:not(.w-editor-isExpanded):before {
  content: '';
  width: 0;
  height: 0;
  position: absolute;
  right: 10px;
  top: 14px;
  border-top: 5px solid #333;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  pointer-events: none;
}
.w-editor-bem-SelectInput_Trigger-legacyFancySelect:not(.w-editor-isExpanded):before {
  right: 7px;
  top: 10px;
  border-right: 3px solid transparent;
}
.w-editor-bem-SelectInput-preview .w-editor-bem-SelectInput_Trigger {
  background: #4d4d4d;
  border-color: #6b6b6b;
}
.w-editor-bem-SelectInput-preview .w-editor-bem-SelectInput_Trigger:before {
  border-top-color: #a9a9a9;
}
.w-editor-bem-SelectInput.w-editor-highlighted .w-editor-bem-SelectInput_Trigger {
  background: rgba(107, 176, 255, 0.35);
  border-color: rgba(107, 176, 255, 0.8);
}
.w-editor-bem-SelectInput.w-editor-highlighted .w-editor-bem-SelectInput_Trigger:before {
  border-top-color: white;
}
.w-editor-bem-SelectInput.w-editor-hasNotice .w-editor-bem-SelectInput_Trigger {
  background: #6f6452;
  border-color: #9e8863;
}
.w-editor-bem-SelectInput.w-editor-hasNotice .w-editor-bem-SelectInput_Trigger:before {
  border-top-color: #B99f76;
}
.w-editor-bem-SelectInput_Menu {
  background: #5e5e5e;
  z-index: 24;
  position: absolute;
  border: 1px solid #333333;
  width: 100%;
  margin-top: -1px;
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
  max-height: 180px;
  overflow-y: auto;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.w-editor-bem-SelectInput_Option {
  position: relative;
  width: 100%;
  color: #333;
}
.w-editor-bem-SelectInput_Option i {
  opacity: 0.7;
}
.w-editor-bem-SelectInput_Option:hover {
  outline: none;
  background-color: #6b6b6b;
  cursor: default;
}
.w-editor-bem-SelectInput_Option:hover i {
  opacity: 0.9;
}
.w-editor-bem-SelectInput_Option:focus {
  outline: none;
  background-color: #3490eb;
}
.w-editor-bem-SelectInput_Option:active {
  background-color: #5e5e5e;
}
.w-editor-bem-SelectInput_Option-disabled {
  background-color: inherit;
  outline: none;
  color: #a6a6a6;
}
.w-editor-bem-SelectInput_Option-disabled:hover {
  color: #a6a6a6;
  cursor: not-allowed;
}
.w-editor-bem-SelectInput_Option-selected {
  background: #3490eb;
  color: #333;
}
.w-editor-bem-SelectInput_Option-selected:hover {
  background: #3490eb;
}
.w-editor-bem-SelectInput_WithAddition {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.w-editor-bem-SelectInput_WithAddition .w-editor-bem-SelectInput {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  min-width: 0;
}
.w-editor-bem-Swatch {
  display: inline-block;
  vertical-align: middle;
  background-color: white;
  border-radius: 2px;
  overflow: hidden;
}
.w-editor-bem-SearchResultPreview {
  min-height: 100px;
  padding: 15px;
  border: 1px solid #212121;
  border-radius: 4px;
  background-color: rgba(255, 255, 255, 0.9);
  position: relative;
}
.w-editor-bem-SearchResultPreview_Arrow {
  position: absolute;
  top: -24px;
  right: 24px;
  display: inline-block;
  padding: 1px;
  opacity: 0.6;
  cursor: default;
}
.w-editor-bem-SearchResultPreview_Arrow:hover {
  opacity: 1;
}
.w-editor-bem-SearchResultPreview_Arrow + .w-editor-bem-SearchResultPreview_Arrow {
  right: 0;
}
.w-editor-bem-SearchResultPreview_Heading {
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  color: #1a0dab;
  overflow-wrap: break-word;
}
.w-editor-bem-SearchResultPreview_Heading-default {
  color: #8A8A8A;
}
.w-editor-bem-SearchResultPreview_Image {
  width: 100%;
}
.w-editor-bem-SearchResultPreview-seo .w-editor-bem-SearchResultPreview_Heading {
  width: 485px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.w-editor-bem-SearchResultPreview-og > .w-editor-bem-SearchResultPreview_Heading,
.w-editor-bem-SearchResultPreview-rss > .w-editor-bem-SearchResultPreview_Heading {
  color: #212121;
}
.w-editor-bem-SearchResultPreview-og > .w-editor-bem-SearchResultPreview_Heading-default,
.w-editor-bem-SearchResultPreview-rss > .w-editor-bem-SearchResultPreview_Heading-default {
  color: #8A8A8A;
}
.w-editor-bem-SearchResultPreview-rss > .w-editor-bem-SearchResultPreview_Description:after {
  content: '';
  display: block;
  position: relative;
  bottom: -10px;
  height: 1px;
  width: 65px;
  margin-bottom: 22px;
  background: #8A8A8A;
}
.w-editor-bem-SearchResultPreview-rss > .w-editor-bem-SearchResultPreview_ItemList {
  margin-top: 20px;
  overflow: auto;
}
.w-editor-bem-SearchResultPreview-rss .w-editor-bem-SearchResultPreview_Image {
  margin-top: 8px;
  margin-right: 8px;
  margin-bottom: 2px;
  width: 260px;
  float: left;
}
.w-editor-bem-SearchResultPreview_Image + .w-editor-bem-SearchResultPreview_Heading {
  margin-top: 5px;
}
.w-editor-bem-SearchResultPreview_Url {
  color: #006621;
}
.w-editor-bem-SearchResultPreview_Url-default {
  color: #8A8A8A;
}
.w-editor-bem-SearchResultPreview-og .w-editor-bem-SearchResultPreview_Url,
.w-editor-bem-SearchResultPreview-rss .w-editor-bem-SearchResultPreview_Url {
  color: #8A8A8A;
}
.w-editor-bem-SearchResultPreview_Description {
  color: #212121;
  overflow-wrap: break-word;
}
.w-editor-bem-SearchResultPreview_Description-default {
  color: #8A8A8A;
}
.w-editor-bem-SearchResultPreview_Heading + .w-editor-bem-SearchResultPreview_Url.w-editor-bem-Paragraph {
  margin-top: 4px;
}
.w-editor-bem-SearchResultPreview_Heading + .w-editor-bem-SearchResultPreview_Description.w-editor-bem-Paragraph {
  margin-top: 4px;
}
.w-editor-bem-SearchResultPreview_Heading + .w-editor-bem-SearchResultPreview_Url.w-editor-bem-Paragraph {
  margin-top: 4px;
}
.w-editor-bem-SearchResultPreview_Url + .w-editor-bem-SearchResultPreview_Description.w-editor-bem-Paragraph {
  margin-top: 4px;
}
.w-editor-bem-SearchResultPreview_Image + .w-editor-bem-SearchResultPreview_Description.w-editor-bem-Paragraph {
  margin-top: 4px;
}
.w-editor-bem-SearchResultPreview_Description + .w-editor-bem-SearchResultPreview_Url.w-editor-bem-Paragraph {
  margin-top: 4px;
}
.w-editor-bem-SlugPreview {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.w-editor-bem-SlugPreview_Icon {
  position: relative;
  opacity: 0.4;
}
.w-editor-bem-Table {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}
.w-editor-bem-Table_Head {
  letter-spacing: 0.5px;
  color: #3B3B3B;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  background: white;
  border-bottom: 1px solid #212121;
}
.w-editor-bem-Table_Header {
  text-transform: capitalize;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  line-height: 14px;
  font-weight: 600;
  padding: 0 13px;
  width: 0;
  height: 38px;
}
.w-editor-bem-Table_Header-clickable {
  cursor: default;
}
.w-editor-bem-Table_Header-clickable:hover {
  color: #fff;
}
.w-editor-bem-Table_Header-selected {
  color: #fff;
}
.w-editor-bem-Table_Body {
  overflow: auto;
}
.w-editor-bem-Table_Row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-bottom: 1px solid #212121;
  height: 100%;
}
.w-editor-bem-Table_Row-clickable {
  cursor: default;
}
.w-editor-bem-Table_Row-clickable:hover,
.w-editor-bem-Table_Row.w-editor-isSelected {
  background-color: white;
  color: white;
}
.w-editor-bem-Table_Row.w-editor-isBulkSelected {
  background-color: rgba(52, 144, 235, 0.25);
}
.w-editor-bem-Table_Row.w-editor-isDisabled {
  cursor: not-allowed;
}
.w-editor-bem-Table_Row.w-editor-isDisabled > * {
  opacity: 0.5;
}
.w-editor-bem-Table_Cell {
  padding: 0 13px;
  min-width: 0;
}
.w-editor-bem-Table_Cell_Icon {
  position: relative;
  display: none;
  margin-left: 5px;
  opacity: 0.3;
}
.w-editor-bem-Table_Cell_Icon:hover {
  opacity: 1;
}
.w-editor-bem-Table_Pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.w-editor-bem-Table_Pagination_Buttons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.w-editor-bem-Table_Pagination_Button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0 12px;
}
.w-editor-bem-Table_Pagination_Button-left {
  width: 90px;
}
.w-editor-bem-Table_Pagination_Button-right {
  width: 65px;
}
.w-editor-bem-TagSelect {
  position: relative;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width: 100%;
}
.w-editor-bem-TagSelect::after {
  content: none !important;
}
.w-editor-bem-TagSelect.w-editor-hasError {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
}
.w-editor-bem-TagSelect.w-editor-hasError > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-TagSelect-preview .w-editor-selectize-control .w-editor-selectize-input.w-editor-items.w-editor-not-full {
  pointer-events: none;
  background: #4d4d4d;
  border-color: #6b6b6b;
}
.w-editor-bem-TagSelect-preview .w-editor-selectize-control .w-editor-selectize-input.w-editor-items.w-editor-not-full.w-editor-disabled {
  opacity: 1;
}
.w-editor-bem-TagSelect.w-editor-hasNotice {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-TagSelect.w-editor-hasNotice .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full {
  background: #6f6452;
  border-color: #9e8863;
}
.w-editor-bem-TagSelect .w-editor-selectize-control {
  padding: 0;
  min-height: 32px;
  border: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full {
  padding: 0px 35px 1px 3px !important;
  vertical-align: top;
  min-height: 32px;
  z-index: 0;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full:hover {
  background: white;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-focus,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items.w-editor-focus,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full.w-editor-focus,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-focus:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items.w-editor-focus:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full.w-editor-focus:hover {
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  background: white;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input::before,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items::before,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full::before {
  content: none;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input > input,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items > input,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full > input {
  position: relative;
  top: 1px;
  left: 3px !important;
  font-size: 12px;
  line-height: 28px !important;
  color: #3B3B3B;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input > input::-webkit-input-placeholder,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items > input::-webkit-input-placeholder,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full > input::-webkit-input-placeholder {
  color: #737373;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full div.w-editor-item {
  min-height: 21px;
  margin: 4px 4px 0 0;
  border-radius: 2px;
  font-size: 11px;
  text-shadow: none;
  padding-right: 6px !important;
  background: #7868be;
  color: #333;
  cursor: default;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full div.w-editor-item .w-editor-remove {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin-left: 6px;
  margin-bottom: 3px;
  padding: 2px;
  border: none;
  color: transparent;
  opacity: 0.6;
  cursor: default;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full div.w-editor-item .w-editor-remove:hover {
  opacity: 1;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-highlighted,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items.w-editor-highlighted,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full.w-editor-highlighted {
  border-color: rgba(107, 176, 255, 0.8);
  background: rgba(107, 176, 255, 0.35);
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown {
  top: 31px;
  border: 1px solid #333333;
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
  color: #333;
  background: #5e5e5e;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content {
  max-height: 224px;
  font-size: 12px;
  line-height: 12px;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option {
  padding: 8px;
  background-color: #5e5e5e;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option:last-child {
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option.w-editor-active {
  background-color: #6b6b6b;
  color: white;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option.w-editor-active::after {
  content: '+ Add';
  float: right;
  margin-right: -8px;
  color: #a6a6a6;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option .w-editor-highlight {
  background: transparent;
  text-decoration: underline;
  color: white;
}
.w-editor-bem-TagSelect i.w-editor-search-big {
  position: absolute;
  right: 9px;
  top: 9px;
  opacity: 0.4;
}
.w-editor-bem-TagSelect-blue .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item,
.w-editor-bem-TagSelect-blue .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item {
  background-image: none;
  background-color: #3490eb;
}
.w-editor-bem-TagSelect_Icon {
  pointer-events: none;
}
.w-editor-bem-TagSelect_Wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.w-editor-bem-TagSelect + .w-editor-bem-Button {
  height: 32px;
}
.w-editor-bem-Text {
  vertical-align: middle;
  color: inherit;
}
.w-editor-bem-Text-dim {
  color: #a6a6a6;
}
.w-editor-bem-Text-dimmer {
  color: #737373;
}
.w-editor-bem-Text-dynamic {
  color: #ae94ff;
}
.w-editor-bem-Text-emphasis {
  color: #2ad986;
}
.w-editor-bem-Text-small {
  font-size: 12px;
}
.w-editor-bem-Text-tiny {
  font-size: 11px;
}
.w-editor-bem-Text-italic {
  font-style: italic;
}
.w-editor-bem-Text-bold {
  font-weight: 600;
}
.w-editor-bem-Text-baseline {
  vertical-align: baseline;
}
.w-editor-bem-TextInput,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full {
  background: #fcfcfc;
  border-radius: 2px;
  border: 1px solid #D1D1D1;
  color: #3B3B3B;
  cursor: text;
  display: block;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-size: 12px;
  padding-top: 8px;
  padding-right: 9px;
  padding-bottom: 8px;
  padding-left: 9px;
  width: 100%;
  line-height: 14px;
}
.w-editor-bem-TextInput::-webkit-input-placeholder {
  color: #737373;
}
.w-editor-bem-TextInput:-webkit-autofill {
  background-color: #c28f0e;
}
.w-editor-bem-TextInput:hover:not(.w-editor-bem-TextInput-preview) {
  background-color: white;
}
.w-editor-bem-TextInput:focus {
  outline: none;
  -webkit-box-shadow: 0 0 0 1px #3490eb;
  box-shadow: 0 0 0 1px #3490eb;
  background-color: white;
}
.w-editor-bem-TextInput:disabled:not(.w-editor-bem-TextInput-preview) {
  opacity: 0.5;
  cursor: not-allowed;
}
.w-editor-bem-TextInput.w-editor-hasError {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
}
.w-editor-bem-TextInput.w-editor-hasError > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-TextInput-head {
  padding-top: 6px;
  padding-bottom: 6px;
  background-color: #ffffff;
  border-color: #d9d9d9;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-TextInput-head:hover,
.w-editor-bem-TextInput-head:focus {
  background-color: #fcfcfc;
}
.w-editor-bem-TextInput-search {
  padding-left: 32px;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 13 13'><path fill='#8A8A8A' d='M11.53 10.47L8.308 7.247a4 4 0 1 0-1.06 1.06l3.222 3.224 1.06-1.06zM5 7.5C3.622 7.5 2.5 6.378 2.5 5S3.622 2.5 5 2.5 7.5 3.622 7.5 5 6.378 7.5 5 7.5z'/></svg>");
  background-repeat: no-repeat;
  background-position: 7px center;
  background-size: 20px;
}
.w-editor-bem-TextInput-preview {
  -webkit-text-fill-color: #3B3B3B;
  background: #4d4d4d;
  border-color: #6b6b6b;
}
.w-editor-bem-TextInput.w-editor-hasNotice {
  -webkit-box-shadow: none;
  box-shadow: none;
  background: #6f6452;
  border-color: #9e8863;
}
.w-editor-bem-TextInput.w-editor-highlighted {
  background: rgba(107, 176, 255, 0.35);
  border-color: rgba(107, 176, 255, 0.8);
}
.w-editor-bem-TimePicker {
  width: 254px;
}
.w-editor-bem-TimePicker_Heading {
  text-transform: uppercase;
  text-align: center;
  font-size: 11px;
  font-weight: 300;
  line-height: 32px;
}
.w-editor-bem-TimePicker_Row {
  margin-right: -1px;
  margin-bottom: -1px;
  padding-top: 1px;
  overflow: hidden;
}
.w-editor-bem-TimePicker_Button {
  display: inline-block;
  width: 43.33333333px;
  height: 43.33333333px;
  margin-top: -1px;
  margin-left: -1px;
  border: 1px solid #212121;
  background: white;
  color: #3B3B3B;
  text-align: center;
  cursor: default;
  /**
     * 1. Makes sure selected button is on top.
     */
}
.w-editor-bem-TimePicker_Button-disabled {
  color: #737373;
}
.w-editor-bem-TimePicker_Button-active:hover {
  background: #5e5e5e;
  color: #333;
}
.w-editor-bem-TimePicker_Button-selected {
  position: relative;
  /* 1 */
  color: #333;
}
.w-editor-bem-TimePicker_Button-selected,
.w-editor-bem-TimePicker_Button-selected:hover {
  background: #3490eb;
}
.w-editor-bem-TimePicker_Switch {
  text-align: center;
  margin: 6px;
}
.w-editor-bem-TimePicker_SwitchButton {
  display: inline-block;
  width: 32.33333333px;
  height: 26px;
  margin: 5px;
  border-radius: 2px;
  color: #3B3B3B;
  cursor: default;
}
.w-editor-bem-TimePicker_SwitchButton:hover {
  background: white;
  color: #333;
}
.w-editor-bem-TimePicker_SwitchButton-selected {
  background: #3490eb;
  color: #333;
}
.w-editor-bem-TimePicker_SwitchButton-selected:hover {
  background: #3490eb;
}
.w-editor-bem-TimePicker_SwitchButton-disabled,
.w-editor-bem-TimePicker_SwitchButton-disabled:hover {
  background: inherit;
  color: #3B3B3B;
  opacity: 0.5;
  cursor: not-allowed;
}
.w-editor-bem-TimePicker-disabled {
  color: #737373;
  pointer-events: none;
}
.w-editor-bem-TokenInput {
  position: relative;
  font-size: 12px;
  border: 1px solid #D1D1D1;
  border-radius: 2px;
}
.w-editor-bem-TokenInput .CodeMirror .CodeMirror-line {
  z-index: auto;
}
.w-editor-bem-TokenInput .CodeMirror.w-cursor-frozen .CodeMirror-cursors {
  visibility: visible !important;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) {
  border: none;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror {
  position: absolute;
  background: transparent;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-size: 12px;
  padding-top: 2px;
  padding-right: 9px;
  padding-left: 9px;
  padding-bottom: 2px;
  font-family: inherit;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror-focused,
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror-focused:hover {
  outline: none;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror-scroll {
  margin-left: -4px;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror .cm-tag {
  color: #3B3B3B;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror .cm-error {
  background-color: transparent;
}
.w-editor-bem-TokenInput_Menu {
  color: #3B3B3B;
  max-height: 400px;
}
.w-editor-bem-TokenInput .w-editor-bem-Dropdown {
  position: absolute;
}
.w-editor-bem-TokenInput .w-editor-bem-Dropdown .w-editor-bem-Dropdown_Body {
  min-width: 160px;
}
.w-editor-bem-TokenInput .w-editor-bem-Dropdown.w-editor-isActive .w-editor-bem-Dropdown_Body {
  z-index: 7;
}
.w-editor-bem-TokenInput .w-add-field-button {
  position: absolute;
  top: -23px;
  right: 0;
  height: 20px;
  color: #ae94ff;
  cursor: default;
}
.w-editor-bem-TokenInput .w-add-field-button:hover {
  color: #c1aeff;
}
.w-editor-bem-TokenInput_Token {
  display: inline-block;
  height: 17px;
  color: #333;
  text-align: center;
  line-height: 18px;
  margin: 0px 0.5px;
  padding: 0px 11px 0px 10px;
  background-color: #7868be;
  border-radius: 100px;
  font-size: 12px;
  text-shadow: none;
}
.w-editor-bem-TokenInput_Token-disabled {
  background-color: white;
  color: #a6a6a6 !important;
}
.w-editor-bem-TokenInput_Token:not(.w-editor-bem-TokenInput_Token-readOnly):not(.w-editor-bem-TokenInput_Token-disabled) {
  padding: 0px 8px 0px 10px;
  cursor: default;
}
.w-editor-bem-TokenInput_Token:not(.w-editor-bem-TokenInput_Token-readOnly):not(.w-editor-bem-TokenInput_Token-disabled):hover {
  background-color: #887ac6;
}
.w-editor-bem-TokenInput_Token:not(.w-editor-bem-TokenInput_Token-readOnly):not(.w-editor-bem-TokenInput_Token-disabled).w-editor-active {
  background-color: #887ac6;
}
.w-editor-bem-TokenInput_Token:not(.w-editor-bem-TokenInput_Token-readOnly):not(.w-editor-bem-TokenInput_Token-disabled).w-selected {
  color: #3490eb;
  background-color: #333;
}
.w-editor-bem-TokenInput_Token:not(.w-editor-bem-TokenInput_Token-readOnly):not(.w-editor-bem-TokenInput_Token-disabled) svg {
  margin-left: 5px;
  margin-bottom: 2px;
}
.w-editor-bem-TokenInput-code {
  border: none;
}
.w-editor-bem-TokenInput-code .w-editor-bem-TokenInput_Token svg {
  margin-bottom: 1px;
}
.w-editor-bem-TokenInput-code .w-editor-bem-TokenInput_Token {
  line-height: 16px;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-lines > div > div:nth-child(3),
.w-editor-bem-TokenInput .cm-s-default .CodeMirror-lines > div > div:nth-child(3) {
  z-index: 0 !important;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-placeholder {
  color: white;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-vscrollbar {
  width: 10px;
  bottom: 0 !important;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-hscrollbar {
  display: none !important;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-scrollbar-filler {
  display: none !important;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-line {
  line-height: 18px;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-gutter-wrapper {
  line-height: 18px;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .w-invalid {
  color: white;
  background-color: #ea384c;
}
.w-editor-bem-TokenInput.w-editor-hasError .cm-s-webflow-material,
.w-editor-bem-TokenInput.w-editor-hasError:hover .cm-s-webflow-material {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
}
.w-editor-bem-TokenInput.w-editor-hasError .cm-s-webflow-material > input.w-editor-input,
.w-editor-bem-TokenInput.w-editor-hasError:hover .cm-s-webflow-material > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-TokenInput-disabled * {
  cursor: not-allowed !important;
  color: #a6a6a6 !important;
}
.w-editor-bem-TokenInput-disabled .w-invalid {
  background-color: transparent !important;
}
.w-editor-bem-TokenInput-disabled .CodeMirror-selected {
  background: none !important;
}
.w-editor-bem-TokenInput-disabled .CodeMirror-cursors {
  display: none;
}
.w-editor-bem-TokenInput-disabled .cm-s-webflow-material:hover {
  background-color: #fcfcfc !important;
}
.w-editor-bem-TokenInput-disabled .CodeMirror-focused {
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}
.w-editor-bem-VideoInput_Preview {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 8px;
}
.w-editor-bem-VideoInput_Preview_EmbedWrapper {
  display: inline-block;
  padding: 8px;
  border: 1px solid #D1D1D1;
  border-radius: 2px;
  background: #fcfcfc;
  color: #3B3B3B;
  /* Cap video preview width at 250px + 16px padding + 2px border */
  max-width: 268px;
}
.w-editor-bem-VideoInput_Preview_EmbedWrapper > iframe {
  width: 100%;
  height: 100%;
}
.w-editor-bem-Confirm_Controls {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  margin-top: 30px;
}
.w-editor-bem-InlineItemEditPane.w-editor-bem-Pane-lift {
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3), 0 4px 24px rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3), 0 4px 24px rgba(0, 0, 0, 0.2);
  border-radius: 3px;
}
.w-editor-bem-InlineItemEditPane.w-editor-bem-Pane {
  border: none;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Head_BackButton {
  display: none;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Title {
  margin-left: 3px;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Body {
  max-height: 560px;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Form {
  display: block !important;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Form .w-editor-bem-Form_Body {
  display: block !important;
}
.w-editor-bem-InlineItemEditPane_Wrapper {
  color: #3B3B3B;
  font-size: 12px;
  z-index: 10000;
}
.w-editor-bem-InlineItemEditPane_Wrapper,
.w-editor-bem-InlineItemEditPane_Backdrop,
.w-editor-bem-InlineItemEditPane_Modal {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.w-editor-bem-InlineItemEditPane_Backdrop {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.6);
  -webkit-transition: opacity 200ms;
  transition: opacity 200ms;
}
.w-editor-bem-InlineItemEditPane_Backdrop.w-editor-transition-enter,
.w-editor-bem-InlineItemEditPane_Backdrop.w-editor-transition-leave {
  opacity: 0;
}
.w-editor-bem-InlineItemEditPane_Backdrop.w-editor-transition-enter-active {
  opacity: 1;
}
.w-editor-bem-InlineItemEditPane_Modal {
  pointer-events: none;
}
.w-editor-bem-InlineItemEditPane_Modal > .w-editor-bem-Modal > .w-editor-bem-Modal_Card {
  width: 800px;
  pointer-events: all;
  -webkit-font-smoothing: antialiased;
}
.w-editor-bem-InlineItemEditPane_Modal > .w-editor-bem-Modal > .w-editor-bem-Modal_Card .w-editor-bem-Field_Head {
  margin-bottom: 10px;
}
.w-editor-bem-InlineItemEditPane_Modal > .w-editor-bem-Modal > .w-editor-bem-Modal_Card > .w-editor-bem-Modal_Body {
  padding: 15px 15px 0 15px;
}
.w-editor-bem-InlineItemEditPane_Modal > .w-editor-bem-Modal > .w-editor-bem-Modal_Card .w-editor-bem-Field .w-editor-bem-SelectInput_Menu {
  margin-bottom: 20px;
}
.w-editor-bem-InlineItemEditPane_Modal > .w-editor-bem-Modal .w-editor-bem-Modal_Head {
  cursor: -webkit-grab;
  cursor: grab;
}
.w-editor-bem-InlineItemEditPane_Modal > .w-editor-bem-Modal .w-editor-bem-Modal_Head.w-editor-dragging {
  cursor: -webkit-grabbing;
  cursor: grabbing;
}
.w-editor-spinner-inline {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  opacity: 0;
}
.w-editor-spinner-inline > .w-editor-spinner {
  width: 24px;
  height: 24px;
  margin-top: -12px;
  margin-left: -12px;
  border: 4px solid rgba(0, 0, 0, 0.4);
}
.w-editor-spinner-inline > .w-editor-spinner:after {
  border-width: 2px;
  top: -3px;
  right: -3px;
  bottom: -3px;
  left: -3px;
}
.w-editor-spinner-processing-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 1;
  opacity: 0;
}
.w-editor-spinner-processing-overlay > .w-editor-spinner {
  bottom: 4px;
  right: 4px;
  top: auto;
  left: auto;
  width: 10px;
  height: 10px;
  border-width: 3px;
  -webkit-animation: w-editor-spin 3s infinite linear;
  animation: w-editor-spin 3s infinite linear;
  pointer-events: all;
}
.w-editor-spinner-processing-overlay > .w-editor-spinner:after {
  border-width: 1px;
  top: -2px;
  right: -2px;
  bottom: -2px;
  left: -2px;
}
.w-editor-spinner-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.4);
  pointer-events: none;
  z-index: 1;
  opacity: 0;
}
.w-editor-spinner {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  margin-left: -20px;
  border: 5px solid rgba(0, 0, 0, 0.4);
  border-radius: 50%;
  -webkit-animation: w-editor-spin 0.8s infinite linear;
  animation: w-editor-spin 0.8s infinite linear;
}
.w-editor-spinner:after {
  position: absolute;
  content: "";
  top: -4px;
  right: -4px;
  bottom: -4px;
  left: -4px;
  border: 3px solid transparent;
  border-bottom-color: #fff;
  border-radius: 50%;
}
.w-editor-canvas-spinner {
  cursor: pointer;
}
.w-editor-canvas-spinner .w-editor-spinner-percent {
  width: 100%;
  float: left;
  color: #fff;
  font-weight: bold;
  text-align: center;
}
.w-editor-canvas-spinner .w-editor-spinner-cancel {
  opacity: 0;
  position: absolute;
  width: 30px;
  float: left;
  color: #fff;
  text-align: center;
  line-height: 30px;
  background: rgba(0, 0, 0, 0.9);
  border-radius: 100%;
  height: 30px;
  -webkit-transition: opacity 150ms;
  transition: opacity 150ms;
}
.w-editor-canvas-spinner:hover .w-editor-spinner-cancel {
  opacity: 1;
}
.w-editor-expanding-label {
  position: relative;
  display: inline-block !important;
  vertical-align: middle;
  opacity: 0;
  will-change: width, opacity;
}
.w-editor-expanding-label-inner {
  position: absolute;
  white-space: nowrap;
}
.w-editor-sync {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  overflow: hidden;
  font-size: 14px;
  margin-right: 2px;
  margin-left: 15px;
  height: 25px;
}
.w-editor-sync-label .w-editor-expanding-label-inner {
  line-height: 0;
  color: #969696;
}
.w-editor-publish-controls {
  display: inline-block;
  vertical-align: middle;
  margin-left: 8px;
  -webkit-transition: opacity 300ms ease;
  transition: opacity 300ms ease;
}
.w-editor-publish-controls .w-editor-publish {
  display: inline-block;
  vertical-align: middle;
  overflow: hidden;
  height: 32px;
  line-height: 30px;
  padding: 0px 24px;
}
.w-editor-publish-controls .w-editor-publish.w--disabled {
  color: white;
  cursor: disabled;
}
.w-editor-publish-controls .w-editor-publish.w--success {
  opacity: 1;
  background: #2EB26B;
  border: 1px solid #299e5f;
  margin-left: 10px;
}
.w-editor-publish-controls .w-editor-clear-staging {
  display: inline-block;
  vertical-align: middle;
  padding: 5px;
  -webkit-transition: opacity 200ms;
  transition: opacity 200ms;
}
.w-editor-publish-controls .w-editor-clear-staging:before {
  content: "";
  position: absolute;
  width: 17px;
  height: 17px;
  background: white;
  z-index: -1;
  border-radius: 50%;
  -webkit-box-shadow: 0px 2px 4px -2px rgba(34, 34, 34, 0.2);
  box-shadow: 0px 2px 4px -2px rgba(34, 34, 34, 0.2);
}
.w-editor-publish-controls .w-editor-clear-staging i {
  background-position: -180px -60px;
  width: 9px;
  height: 9px;
  margin-left: 4px;
  margin-bottom: 2px;
  opacity: 0.5;
}
.w-editor-publish-controls .w-editor-clear-staging:active:before {
  background-color: #f7f7f7;
}
.w-editor-publish-controls .w-editor-clear-staging.w--disabled {
  opacity: 0;
}
.w-editor-change-count {
  color: #1d83e9;
  font-size: 14px;
  margin-right: 10px;
  display: inline-block;
  cursor: pointer;
  vertical-align: middle;
  padding: 7px 9px;
  -webkit-transition: color 75ms ease, background 75ms ease, -webkit-box-shadow 75ms ease;
  transition: color 75ms ease, background 75ms ease, -webkit-box-shadow 75ms ease;
  transition: color 75ms ease, background 75ms ease, box-shadow 75ms ease;
  transition: color 75ms ease, background 75ms ease, box-shadow 75ms ease, -webkit-box-shadow 75ms ease;
  border-radius: 3px;
  background-color: rgba(255, 255, 255, 0);
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0);
}
.w-editor-change-count:hover {
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15);
}
.w-editor-change-count:active {
  color: #1577d7;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
  background: rgba(0, 0, 0, 0.03);
}
.w-editor-rich-text-container {
  white-space: nowrap;
  position: absolute;
  pointer-events: auto;
  z-index: 2147483647;
}
.w-editor-bem-Button {
  background: #F5F5F5;
  border-radius: 3px;
  border: 1px solid #d4d4d4;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  color: #333;
  font-size: 14px;
  font-weight: 400;
  height: 35px;
  margin: 0;
  padding: 0 10px;
  text-shadow: none;
  -webkit-transition: background 75ms ease;
  transition: background 75ms ease;
}
.w-editor-bem-Button .w-editor-bem-Icon {
  bottom: 1px !important;
}
.w-editor-bem-Button:hover {
  background: #fdfdfd;
  border: 1px solid #d9d9d9;
  color: #262626;
}
.w-editor-bem-Button:active {
  color: #333;
  background: #ebebeb;
  border: 1px solid #d6d6d6;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
}
.w-editor-bem-Button-head {
  color: #333;
  background: #FAFAFA;
  border: 1px solid #d1d1d1;
}
.w-editor-bem-Button-head:hover {
  background: #ffffff;
  border: 1px solid #d6d6d6;
}
.w-editor-bem-Button-head:active {
  background: #f0f0f0;
  border: 1px solid #c7c7c7;
}
.w-editor-bem-Button-primary {
  background: #2EB26B;
  border: 1px solid #299e5f;
  color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
}
.w-editor-bem-Button-primary:hover {
  color: white;
  background-color: #32c275;
  border: 1px solid #2ba664;
}
.w-editor-bem-Button-primary:active {
  color: white;
  background: #2dae69;
  border: 1px solid #269258;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
}
.w-editor-bem-Button-icon {
  padding-left: 5px;
  padding-right: 5px;
}
.w-editor-bem-Button-emphasis {
  background: #3490eb;
  border: 1px solid #167ce0;
  color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
}
.w-editor-bem-Button-emphasis:hover {
  background-color: #479aed;
  border: 1px solid #2186e9;
  color: white;
}
.w-editor-bem-Button-emphasis:active {
  background: #2688ea;
  border: 1px solid #167ce0;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
  color: white;
}
.w-editor-bem-Button-warning {
  background: #F05C24;
  border-color: #ea4c10;
  color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
}
.w-editor-bem-Button-warning:hover {
  background: #f26e3c;
  border-color: #F05C24;
  color: white;
}
.w-editor-bem-Button-warning:active {
  background: #ea4c10;
  border-color: #d3440e;
  color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
}
.w-editor-bem-Button-danger {
  background: #E72222;
  border-color: #d81717;
  color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
}
.w-editor-bem-Button-risk:hover,
.w-editor-bem-Button-danger:hover {
  background: #e93939;
  border-color: #E72222;
  color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.08);
}
.w-editor-bem-Button-risk:active,
.w-editor-bem-Button-danger:active {
  background: #d81717;
  border-color: #c11515;
  color: white;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(0, 0, 0, 0.05);
}
.w-editor-bem-Button-disabled {
  opacity: 0.5;
  cursor: not-allowed;
  pointer-events: none;
}
.w-editor-bem-Button-small {
  line-height: 20px;
  min-width: 22px;
  height: 22px;
}
.w-editor-bem-Checkbox {
  margin: 0;
}
.w-editor-bem-Checkbox_Input {
  display: inline-block;
  -webkit-appearance: none;
  border: 1px solid #cccccc;
  -webkit-box-shadow: none;
  box-shadow: none;
  height: 16px;
  width: 16px;
  line-height: 15px;
  margin-right: 7px;
  border-radius: border-radius;
  background: #fcfcfc;
  cursor: pointer;
  position: relative;
  overflow: visible;
}
.w-editor-bem-Checkbox_Input::before {
  position: relative;
  top: 1px;
  left: 1px;
  content: 'x';
  color: transparent;
  pointer-events: none;
  display: block;
  opacity: 0;
}
.w-editor-bem-Checkbox_Input:checked::before {
  opacity: 1;
}
.w-editor-bem-Checkbox_Input:focus {
  outline: 0;
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  border: 1px solid #3490eb;
}
.w-editor-bem-Checkbox_Label {
  display: inline;
  cursor: pointer;
}
.w-editor-bem-ConfirmWrapper_Modal {
  pointer-events: auto;
  z-index: 2147483548;
}
.w-editor-bem-FileDropZone {
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: color 75ms ease, border 75ms ease, -webkit-box-shadow 75ms ease;
  transition: color 75ms ease, border 75ms ease, -webkit-box-shadow 75ms ease;
  transition: box-shadow 75ms ease, color 75ms ease, border 75ms ease;
  transition: box-shadow 75ms ease, color 75ms ease, border 75ms ease, -webkit-box-shadow 75ms ease;
}
.w-editor-bem-FileDropZone .w-editor-bem-Icon {
  margin-right: 20px;
}
.w-editor-bem-FileDropZone .w-editor-bem-Link {
  text-decoration: underline;
  color: #333;
}
.w-editor-bem-FileDropZone .w-editor-bem-Link:hover {
  color: #3490eb;
}
.w-editor-bem-FileDropZone.w-editor-isDropTarget {
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
}
.w-editor-bem-FileDropZone .w-editor-bem-Icon {
  opacity: 0.3;
}
.w-editor-bem-EditorAccordion {
  position: relative;
  -webkit-box-shadow: 0 2px 3px 1px #f4f4f4;
  box-shadow: 0 2px 3px 1px #f4f4f4;
}
.w-editor-bem-EditorAccordion_Section {
  position: relative;
  margin-top: 22px;
  margin-bottom: 40px;
}
.w-editor-bem-EditorAccordion_Section .w-editor-bem-Heading {
  margin-bottom: 14px;
}
.w-editor-bem-EditorAccordion_Section + .w-editor-bem-EditorAccordion_Section {
  margin-top: 45px;
}
.w-editor-bem-EditorAccordion_Item {
  position: relative;
  border: 1px solid #D1D1D1;
  background: white;
  margin-top: -1px;
  margin-bottom: -1px;
}
.w-editor-bem-EditorAccordion_Item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.w-editor-bem-EditorAccordion_Item:last-child {
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
}
.w-editor-bem-EditorAccordion_Item-hovered {
  background: #F3F8FC;
  border-color: #B3D3F7;
  z-index: 1;
}
.w-editor-bem-EditorAccordion_Item-selected {
  background: white;
  border: 1px solid #D1D1D1;
}
.w-editor-bem-EditorAccordion_Title {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
  position: relative;
  padding: 10px 30px 10px 14px;
  font-size: 14px;
  color: #333;
}
.w-editor-bem-EditorAccordion_Title * {
  cursor: pointer;
}
.w-editor-bem-EditorAccordion_Title .w-editor-bem-Text {
  -webkit-user-select: text;
  -moz-user-select: text;
  -ms-user-select: text;
  user-select: text;
}
.w-editor-bem-EditorAccordion_Title .w-editor-bem-Icon {
  position: absolute;
  right: 14px;
  top: 0;
  bottom: 0;
  margin: auto;
}
.w-editor-bem-EditorAccordion_Body {
  position: relative;
  overflow: hidden;
  padding: 0 14px;
  font-size: 14px;
  color: #808080;
  line-height: 20px;
}
.w-editor-EditorAccordionPad {
  position: relative;
  clear: both;
  height: 14px;
}
.w-editor-bem-EditorApp {
  display: inline;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: -webkit-transform 1000ms ease-out-sine;
  transition: -webkit-transform 1000ms ease-out-sine;
  transition: transform 1000ms ease-out-sine;
  transition: transform 1000ms ease-out-sine, -webkit-transform 1000ms ease-out-sine;
}
.w-editor-bem-EditorApp-focused .w-editor-bem-EditorApp_Panel {
  -webkit-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}
.w-editor-bem-EditorApp-focused.w-editor-bem-EditorApp-login .w-editor-bem-EditorApp_Panel {
  -webkit-transform: translate3d(0, -160px, 0);
  transform: translate3d(0, -160px, 0);
}
.w-editor-bem-EditorApp-focused.w-editor-bem-EditorApp-signup .w-editor-bem-EditorApp_Panel {
  -webkit-transform: translate3d(0, -240px, 0);
  transform: translate3d(0, -240px, 0);
}
.w-editor-bem-EditorApp-newLogin .w-editor-bem-EditorApp_Panel {
  -webkit-transform: translate3d(0, -48px, 0);
  transform: translate3d(0, -48px, 0);
}
.w-editor-bem-EditorApp-focused.w-editor-bem-EditorApp-login .w-editor-bem-Pane {
  max-height: 160px;
}
.w-editor-bem-EditorApp-focused.w-editor-bem-EditorApp-signup .w-editor-bem-Pane {
  max-height: 240px;
}
.w-editor-bem-EditorApp-login .w-editor-bem-Pane_Body_Inner,
.w-editor-bem-EditorApp-signup .w-editor-bem-Pane_Body_Inner {
  max-width: 960px;
}
.w-editor-bem-EditorApp-login .w-editor-bem-Field_Head,
.w-editor-bem-EditorApp-signup .w-editor-bem-Field_Head {
  margin-bottom: 8px;
}
.w-editor-bem-EditorApp-login .w-editor-bem-Button,
.w-editor-bem-EditorApp-signup .w-editor-bem-Button {
  height: 40px;
}
.w-editor-bem-EditorApp-login .w-editor-bem-TextInput,
.w-editor-bem-EditorApp-signup .w-editor-bem-TextInput,
.w-editor-bem-EditorApp-login .w-editor-bem-TextInput:focus,
.w-editor-bem-EditorApp-signup .w-editor-bem-TextInput:focus {
  background-color: #F6F6F6;
  line-height: 22px;
}
.w-editor-bem-EditorApp-login .w-editor-bem-EditorLogo + .w-editor-bem-Heading,
.w-editor-bem-EditorApp-signup .w-editor-bem-EditorLogo + .w-editor-bem-Heading {
  margin-top: 5px;
}
.w-editor-bem-EditorApp_Panel {
  position: absolute;
  overflow: visible;
  top: 100%;
  left: 0;
  right: 0;
  height: calc(100% - 80px);
  pointer-events: auto;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  background: #F7F7F7;
  -webkit-box-shadow: 0 -1px 0 0 rgba(0, 0, 0, 0.18);
  box-shadow: 0 -1px 0 0 rgba(0, 0, 0, 0.18);
  color: #333;
  -webkit-box-flex: 0;
  -ms-flex-positive: 0;
  flex-grow: 0;
  -webkit-transform: translate3d(0, -48px, 0);
  transform: translate3d(0, -48px, 0);
  -webkit-transition: -webkit-transform 300ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: -webkit-transform 300ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: transform 300ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: transform 300ms cubic-bezier(0.165, 0.84, 0.44, 1), -webkit-transform 300ms cubic-bezier(0.165, 0.84, 0.44, 1);
  will-change: transform;
  z-index: 3;
}
.w-editor-bem-EditorApp-minimized .w-editor-bem-EditorApp_Panel {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-EditorApp_Main {
  bottom: 0;
  color: #333;
  cursor: default;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-size: 14px;
  font-weight: 400;
  font-style: normal;
  font-variant: normal;
  left: 0;
  letter-spacing: normal;
  line-height: normal;
  overflow: visible;
  pointer-events: none;
  position: fixed;
  right: 0;
  text-align: left;
  text-decoration: none;
  text-transform: none;
  top: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  white-space: normal;
}
.w-editor-bem-EditorApp_Main .w--disabled {
  cursor: default;
  opacity: 0.6;
}
.w-editor-bem-EditorApp_Main .w--no-pointer {
  pointer-events: none;
}
.w-editor-bem-EditorApp_Tooltips {
  z-index: 3;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.w-editor-edit {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0px;
}
.w-editor-edit-fade-out > div:nth-of-type(2) {
  opacity: 0;
  /* use !important to prevent issues with user styles overriding editor transition visibility */
  visibility: hidden !important;
  -webkit-transition: all 300ms ease-in;
  transition: all 300ms ease-in;
  all: unset;
}
.w-editor-edit > div:nth-of-type(2) {
  opacity: 0;
  visibility: hidden;
}
.w-editor-edit-fade-in > div:nth-of-type(2) {
  opacity: 1;
  visibility: visible;
  -webkit-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
}
.w-editor-publish-node {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0px;
  opacity: 1;
  -webkit-transition: all 300ms ease-out;
  transition: all 300ms ease-out;
  visibility: visible;
}
.w-editor-publish-node-fade-out {
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 300ms ease-in;
  transition: all 300ms ease-in;
}
.w-editor-bem-EditorBlocker {
  cursor: pointer;
  opacity: 0;
  pointer-events: none;
  z-index: 2;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-transition: opacity 300ms;
  transition: opacity 300ms;
  position: absolute;
  background: rgba(34, 34, 34, 0.6);
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.w-editor-bem-EditorApp-focused .w-editor-bem-EditorBlocker {
  pointer-events: auto;
  opacity: 1;
}
.w-editor-bem-EditorApp-focused .w-editor-bem-EditorBlocker_Button {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}
.w-editor-bem-EditorApp-newLogin .w-editor-bem-EditorBlocker_Button {
  -webkit-transition: none;
  transition: none;
  opacity: 0;
}
.w-editor-bem-EditorBlocker_Positioner {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 20px;
}
.w-editor-bem-EditorApp-login .w-editor-bem-EditorBlocker_Positioner,
.w-editor-bem-EditorApp-signup .w-editor-bem-EditorBlocker_Positioner {
  top: auto;
  -webkit-transition: -webkit-transform 300ms ease;
  transition: -webkit-transform 300ms ease;
  transition: transform 300ms ease;
  transition: transform 300ms ease, -webkit-transform 300ms ease;
}
.w-editor-bem-EditorApp-login .w-editor-bem-EditorBlocker_Positioner {
  bottom: 160px;
}
.w-editor-bem-EditorApp-signup .w-editor-bem-EditorBlocker_Positioner {
  bottom: 240px;
}
.w-editor-bem-EditorApp-login.w-editor-bem-EditorApp-message .w-editor-bem-EditorBlocker_Positioner,
.w-editor-bem-EditorApp-signup.w-editor-bem-EditorApp-message .w-editor-bem-EditorBlocker_Positioner {
  -webkit-transform: translateY(-40px);
  transform: translateY(-40px);
}
.w-editor-bem-EditorBlocker_Button {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
  background-color: rgba(0, 0, 0, 0.55);
  border-radius: 99px;
  color: #c7c7c7;
  font-size: 14px;
  line-height: 39px;
  width: 200px;
  margin-top: auto;
  text-align: center;
  -webkit-transform: scale(0.97);
  transform: scale(0.97);
  opacity: 0;
  will-change: background-color, transform, color, opacity;
  -webkit-transition: background-color, color, opacity, -webkit-transform;
  transition: background-color, color, opacity, -webkit-transform;
  transition: background-color, color, transform, opacity;
  transition: background-color, color, transform, opacity, -webkit-transform;
  -webkit-transition-duration: 150ms, 150ms, 500ms, 500ms;
  transition-duration: 150ms, 150ms, 500ms, 500ms;
  -webkit-transition-delay: 0s, 0s, 300ms, 300ms;
  transition-delay: 0s, 0s, 300ms, 300ms;
}
.w-editor-bem-EditorBlocker_Button * {
  cursor: pointer;
}
.w-editor-bem-EditorBlocker_Button .w-editor-bem-Text {
  display: inline-block;
}
.w-editor-bem-EditorBlocker_Button > .w-editor-bem-Icon {
  opacity: 0.6;
  background-position: -240px -40px;
  width: 12px;
  height: 13px;
  -webkit-transition: opacity 150ms ease;
  transition: opacity 150ms ease;
}
.w-editor-bem-EditorBlocker:hover .w-editor-bem-EditorBlocker_Button {
  background-color: rgba(0, 0, 0, 0.7);
  color: #e6e6e6;
  -webkit-transition-duration: 150ms;
  transition-duration: 150ms;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
.w-editor-bem-EditorBlocker:hover .w-editor-bem-EditorBlocker_Button > .w-editor-bem-Icon {
  opacity: 0.9;
}
.w-editor-bem-EditorBlocker:active .w-editor-bem-EditorBlocker_Button {
  background-color: rgba(0, 0, 0, 0.3);
  -webkit-transform: scale(0.97);
  transform: scale(0.97);
}
.w-editor-bem-EditorFallback {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(34, 34, 34, 0.6);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  z-index: 2147483547;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
}
.w-editor-bem-EditorFallback_Card {
  position: absolute;
  background: white;
  border: 1px solid #6f6f6f;
  -webkit-box-shadow: 0px 10px 5px -8px rgba(80, 80, 80, 0.3);
  box-shadow: 0px 10px 5px -8px rgba(80, 80, 80, 0.3);
  max-width: 500px;
  height: 380px;
  border-radius: 5px;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  margin: auto;
}
.w-editor-bem-EditorFallback_Head {
  position: relative;
  border-radius: 5px 5px 0 0;
  border-bottom: 1px solid #E3E3E3;
  background-color: #F7F7F7;
  padding: 12px 15px;
  width: 100%;
  font-size: 17px;
  text-align: center;
}
.w-editor-bem-EditorFallback_Close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 12px 15px;
  border-top-right-radius: 5px;
  cursor: pointer;
}
.w-editor-bem-EditorFallback_Close:hover {
  background: #eee;
}
.w-editor-bem-EditorFallback_Close:active {
  background: #ddd;
}
.w-editor-bem-EditorFallback_Close .w-editor-bem-Icon {
  opacity: 0.5;
}
.w-editor-bem-EditorFallback_Content {
  position: relative;
  border-radius: 0 0 5px 5px;
  padding: 30px 50px 20px;
  background-color: white;
  height: 278px;
}
.w-editor-bem-EditorFallback_Message {
  position: relative;
  font-size: 16px;
  line-height: 21px;
  margin-bottom: 20px;
  text-align: center;
}
.w-editor-bem-EditorFallback_Browsers {
  position: relative;
  white-space: nowrap;
  text-align: center;
}
.w-editor-bem-EditorFallback_Browser {
  position: relative;
  display: inline-block;
  padding: 12px;
  width: 33.333%;
  margin-bottom: 5px;
  border-radius: 5px;
  cursor: pointer;
}
.w-editor-bem-EditorFallback_Browser:hover {
  background: #eee;
}
.w-editor-bem-EditorFallback_Browser:active {
  background: #ddd;
}
.w-editor-bem-EditorFallback_BrowserLabel {
  font-size: 15px;
  margin-top: 10px;
  color: #1d83e9;
}
.w-editor-bem-EditorFallback_BrowserVersion {
  font-size: 14px;
  color: #999;
}
.w-editor-bem-EditorFallback_Footer {
  position: relative;
  margin: 0 50px;
  text-align: center;
  border-top: 1px solid #ddd;
  padding-top: 7px;
}
.w-editor-bem-EditorFallback_GoBack,
.w-editor-bem-EditorFallback_Support {
  position: relative;
  display: inline-block;
  font-size: 14px;
  color: #1d83e9;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
}
.w-editor-bem-EditorFallback_GoBack:hover,
.w-editor-bem-EditorFallback_Support:hover {
  background: #eee;
}
.w-editor-bem-EditorFallback_GoBack:active,
.w-editor-bem-EditorFallback_Support:active {
  background: #ddd;
}
.w-editor-bem-EditorFallback_LinkSep {
  position: relative;
  display: inline-block;
}
.w-editor-bem-EditorFallback_LinkSep::before {
  content: "\2022";
  color: #ccc;
  font-size: 11px;
}
.w-editor-bem-EditorFallback-mobile .w-editor-bem-EditorFallback_Card {
  width: 90%;
  height: 350px;
}
.w-editor-bem-EditorFallback-mobile .w-editor-bem-EditorFallback_Message {
  font-size: 18px;
  line-height: 23px;
  max-width: 320px;
  margin-left: auto;
  margin-right: auto;
}
.w-editor-bem-EditorFallback-mobile .w-editor-bem-EditorFallback_Content {
  padding-left: 30px;
  padding-right: 30px;
  height: auto;
}
.w-editor-bem-EditorFallback-mobile .w-editor-bem-EditorFallback_LinkSep {
  display: block;
}
.w-editor-bem-EditorFallback-mobile .w-editor-bem-EditorFallback_LinkSep::before {
  content: "";
}
.w-editor-bem-EditorLogo {
  height: 40px;
  display: inline-block;
  width: auto;
}
.w-editor-bem-EditorLogo-small {
  height: 32px;
  margin: 0 6px 0 8px;
}
.w-editor-bem-EditorLogoNav_Button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  cursor: pointer;
  white-space: nowrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  overflow: hidden;
  height: 48px;
  margin-left: -8px;
  padding-left: 14px;
  padding-right: 14px;
}
.w-editor-bem-EditorLogoNav_Button:hover {
  background: rgba(255, 255, 255, 0.3);
}
.w-editor-bem-EditorLogoNav_Button:active,
.w-editor-bem-EditorLogoNav-isOpen .w-editor-bem-EditorLogoNav_Button {
  background: rgba(0, 0, 0, 0.04);
}
.w-editor-bem-EditorLogoNav_Logo,
.w-editor-bem-EditorLogoNav_MenuIcon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-transition: opacity 100ms ease, color 100ms ease;
  transition: opacity 100ms ease, color 100ms ease;
}
.w-editor-bem-EditorLogoNav_MenuIcon {
  margin-right: 4px;
  color: #b3b3b3;
}
.w-editor-bem-EditorLogoNav:active .w-editor-bem-EditorLogoNav_Logo,
.w-editor-bem-EditorLogoNav:active .w-editor-bem-EditorLogoNav_MenuIcon,
.w-editor-bem-EditorLogoNav-isOpen .w-editor-bem-EditorLogoNav_Logo,
.w-editor-bem-EditorLogoNav-isOpen .w-editor-bem-EditorLogoNav_MenuIcon {
  opacity: 0.5;
}
.w-editor-bem-EditorLogoNav-isOpen .w-editor-bem-EditorLogoNav_MenuIcon,
.w-editor-bem-EditorLogoNav_Button:hover .w-editor-bem-EditorLogoNav_MenuIcon {
  color: rgba(51, 51, 51, 0.85);
}
.w-editor-messages {
  position: absolute;
  overflow: hidden;
  width: 100%;
  height: 40px;
  top: -40px;
}
.w-editor-message-inner {
  background: #E72222;
  width: 960px;
  margin: 0 auto;
  height: 40px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  line-height: 40px;
  padding: 0 20px;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  color: white !important;
  -webkit-transition: background-color 200ms;
  transition: background-color 200ms;
}
.w-editor-message-inner a {
  color: white;
  text-decoration: underline;
}
.w-editor-message-inner-success {
  background: #2EB26B;
}
.w-editor-bem-EmbedEditor_Modal > .w-editor-bem-Modal > .w-editor-bem-Modal_Card {
  width: 800px;
}
.w-editor-bem-EmbedEditor_Modal > .w-editor-bem-Modal > .w-editor-bem-Modal_Card .w-editor-bem-Button {
  display: inline-block;
  margin-top: 7px;
}
.w-editor-bem-EmbedEditor_Modal > .w-editor-bem-Modal .w-editor-bem-Modal_Head {
  cursor: -webkit-grab;
  cursor: grab;
}
.w-editor-bem-EmbedEditor_Modal > .w-editor-bem-Modal .w-editor-bem-Modal_Head.w-editor-dragging {
  cursor: -webkit-grabbing;
  cursor: grabbing;
}
.w-editor-bem-HintButton {
  height: 15px;
  padding: 0;
}
.w-editor-bem-Modal_Card {
  background: white;
  border-radius: 5px;
  color: inherit;
}
.w-editor-bem-Modal_Head {
  border-radius: 5px 5px 0 0;
  border-bottom-color: #E3E3E3;
  background-color: #F7F7F7;
}
.w-editor-bem-Modal_Body {
  border-radius: 0 0 5px 5px;
}
.w-editor-bem-Modal_Controls .w-editor-bem-Button {
  display: inline-block;
}
.w-editor-bem-EditorOverlay {
  position: absolute;
  z-index: 1;
  pointer-events: none;
}
.w-editor-bem-EditorOverlay > .w-editor-edit-outline {
  position: absolute;
  z-index: 1;
}
.w-editor-bem-EditorOverlay > .w-editor-edit-outline > .w-editor-inner {
  position: absolute;
  top: -4px;
  right: -4px;
  bottom: -4px;
  left: -4px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.09);
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.09);
}
.w-editor-bem-EditorOverlay > .w-editor-hover-outline {
  position: absolute;
  z-index: 2;
}
.w-editor-bem-EditorOverlay > .w-editor-hover-outline > .w-editor-inner {
  position: absolute;
  top: -4px;
  right: -4px;
  bottom: -4px;
  left: -4px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  background: rgba(255, 255, 255, 0.1);
}
.w-editor-bem-EditorOverlay > .w-editor-hover-controls {
  pointer-events: auto;
  position: absolute;
  z-index: 3;
  color: rgba(255, 255, 255, 0.8);
  -webkit-transition: color 100ms ease;
  transition: color 100ms ease;
  margin-top: -10px;
}
.w-editor-bem-EditorOverlay .w-editor-hover-hitzone-top {
  position: absolute;
  cursor: auto;
  width: 100%;
  min-width: 60px;
  height: 10px;
  right: -10px;
  top: 1px;
}
.w-editor-bem-EditorOverlay .w-editor-hover-hitzone-right {
  position: absolute;
  cursor: auto;
  width: 30px;
  height: 40px;
  right: -10px;
  top: 0px;
}
.w-editor-bem-EditorOverlay .w-editor-hover-inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  pointer-events: auto;
  position: absolute;
  cursor: pointer;
  line-height: 42px;
  width: 31px;
  height: 31px;
  right: -16px;
  top: -5px;
  text-align: center;
  background-color: #E3E3E3;
  color: #333;
  -webkit-box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.1), inset 0px 20px 60px -20px #F7F7F7, 0 0 0 1px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.1), inset 0px 20px 60px -20px #F7F7F7, 0 0 0 1px rgba(0, 0, 0, 0.2);
  font-size: 12px;
  white-space: nowrap;
  border-radius: 50%;
  -webkit-transition: background-color 75ms ease;
  transition: background-color 75ms ease;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
}
.w-editor-bem-EditorOverlay .w-editor-hover-inner:hover {
  background-color: #f0f0f0;
}
.w-editor-bem-EditorOverlay .w-editor-hover-inner svg {
  margin: auto;
}
.w-editor-bem-EditorOverlay i.w--text {
  background-position: -120px 0px;
  width: 13px;
  height: 14px;
  margin: auto;
  opacity: 0.8;
}
.w-editor-bem-EditorOverlay i.w--image,
.w-editor-bem-EditorOverlay i.w--background-image {
  background-position: -200px 0px;
  width: 19px;
  height: 16px;
  margin: auto;
  opacity: 0.8;
}
.w-editor-bem-EditorHoverControls .w-editor-bem-PopoverMenu:after {
  top: 19px;
}
.w-editor-bem-EditorStartButton {
  cursor: pointer;
  position: absolute;
  right: 0;
  top: -44px;
  width: 70px;
  height: 45px;
  overflow: hidden;
  text-align: center;
}
.w-editor-bem-EditorStartButton * {
  cursor: pointer;
}
.w-editor-bem-EditorStartButton_Shape {
  position: absolute;
  width: 34px;
  height: 34px;
  background: #E3E3E3;
  border: 1px solid #D1D1D1;
  border-radius: 5px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  top: auto;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  text-align: center;
  -webkit-box-shadow: 0px 0px 8px 5px rgba(0, 0, 0, 0.02), inset 0px 22px 70px -20px #F7F7F7;
  box-shadow: 0px 0px 8px 5px rgba(0, 0, 0, 0.02), inset 0px 22px 70px -20px #F7F7F7;
}
.w-editor-bem-EditorStartButton .w-editor-bem-Icon {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
}
.w-editor-bem-EditorStartButton .w-editor-bem-Icon.w--arrow {
  bottom: 8px;
  top: auto;
}
.w-editor-bem-EditorStartButton .w-editor-bem-Icon.w--pencil {
  bottom: 11px;
  top: auto;
}
.w-editor-bem-EditorStartButton:active .w-editor-bem-EditorStartButton_Shape {
  background: #D1D1D1;
}
.w-editor-bem-EditSiteButton:hover {
  background: #fff !important;
}
.w-editor-bem-EditSiteButton:focus {
  outline: none;
}
.w-editor-bem-EditorTransactions {
  position: absolute;
  bottom: 44px;
  right: 10px;
  width: 330px;
  font-size: 13px;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.14), 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.14), 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
  z-index: 5;
  background: white;
}
.w-editor-bem-EditorTransactions-top {
  bottom: auto;
  top: 47px;
}
.w-editor-bem-EditorTransactions_Head {
  position: relative;
  background: #F5F5F5;
  color: #666666;
  padding: 10px 12px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom: 1px solid #D1D1D1;
  z-index: 1;
}
.w-editor-bem-EditorTransactions_Head .w-editor-bem-Text {
  text-transform: uppercase;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-weight: 600;
  font-size: 12px;
  -webkit-font-smoothing: antialiased;
}
.w-editor-bem-EditorTransactions_Head .w-editor-spinner-inline {
  margin-right: 8px;
}
.w-editor-bem-EditorTransactions_Head .w-editor-bem-IconButton {
  cursor: pointer;
  position: absolute;
  top: 0;
  right: 0;
  width: 30px;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}
.w-editor-bem-EditorTransactions_Head .w-editor-bem-IconButton * {
  cursor: pointer;
}
.w-editor-bem-EditorTransactions_Items {
  position: relative;
  max-height: 50vh;
  overflow-y: auto;
  top: -1px;
}
.w-editor-bem-EditorTransactions_ItemsFooter {
  position: relative;
}
.w-editor-bem-EditorTransactions_ItemsShadow {
  position: absolute;
  pointer-events: none;
  top: -30px;
  height: 30px;
  width: 100%;
  -webkit-box-shadow: inset 0 -23px 14px -10px white;
  box-shadow: inset 0 -23px 14px -10px white;
  z-index: 1;
  opacity: 1;
  -webkit-transition: opacity 400ms;
  transition: opacity 400ms;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.w-editor-bem-EditorTransactions-publish .w-editor-bem-EditorTransactions_Items {
  max-height: calc(50vh - 60px);
}
.w-editor-bem-EditorTransactions_Item {
  position: relative;
  border-top: 1px solid #D1D1D1;
  padding: 10px 12px;
  font-size: 13px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  white-space: nowrap;
}
.w-editor-bem-EditorTransactions_Item span {
  display: inline;
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1;
  min-width: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.w-editor-bem-EditorTransactions_Item .w--add {
  color: #2EB26B;
  margin-right: 2px;
}
.w-editor-bem-EditorTransactions_Item .w--delete {
  color: #E72222;
  margin-right: 2px;
}
.w-editor-bem-EditorTransactions_Item .w-editor-bem-Link {
  color: #3490eb;
}
.w-editor-bem-EditorTransactions_Item .w-editor-bem-ProfilePicture {
  margin-right: 8px;
  margin-top: -1px;
}
.w-editor-bem-EditorTransactions_Tail {
  position: absolute;
  bottom: -6.5px;
  -webkit-transform: translateX(150px);
  transform: translateX(150px);
  -webkit-transition: -webkit-transform 200ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: -webkit-transform 200ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: transform 200ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: transform 200ms cubic-bezier(0.165, 0.84, 0.44, 1), -webkit-transform 200ms cubic-bezier(0.165, 0.84, 0.44, 1);
  z-index: -1;
}
.w-editor-bem-EditorTransactions_Tail-publish {
  -webkit-transform: translateX(280px);
  transform: translateX(280px);
}
.w-editor-bem-EditorTransactions_Tail_Shape {
  width: 13px;
  height: 13px;
  background: white;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.14), 2px 2px 4px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.14), 2px 2px 4px 0px rgba(0, 0, 0, 0.05);
}
.w-editor-bem-EditorTransactions_Tail-top {
  top: -5.5px;
}
.w-editor-bem-EditorTransactions_Tail-top .w-editor-bem-EditorTransactions_Tail_Shape {
  background: #F5F5F5;
  -webkit-box-shadow: -1px -1px 0 rgba(0, 0, 0, 0.14), -2px -2px 4px 0px rgba(0, 0, 0, 0.05);
  box-shadow: -1px -1px 0 rgba(0, 0, 0, 0.14), -2px -2px 4px 0px rgba(0, 0, 0, 0.05);
}
.w-editor-bem-EditorTransactions_Publish {
  position: relative;
  padding: 12px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-top: 1px solid #D1D1D1;
}
.w-editor-bem-EditorTransactions_Congrats {
  position: relative;
  padding: 12px;
  font-size: 14px;
}
.w-editor-bem-EditorTransactions_Checkmark {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  background: #2EB26B;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  margin-right: 7px;
}
.w-editor-bem-EditorTransactions_Checkmark .w-editor-bem-Icon {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin: auto;
}
.w-editor-bem-Field_Label {
  font-size: 14px;
  font-weight: 400;
}
.w-editor-bem-Field_Body {
  font-weight: 400;
}
.w-editor-bem-Field_Hint {
  color: #888;
  font-size: 13px;
  margin-top: 0px;
  margin-bottom: 2px;
}
.w-editor-bem-Field_Hint-bottom {
  margin-top: 8px;
}
.w-editor-bem-Field_Note {
  font-size: 13px;
}
.w-editor-bem-Field_Note,
.w-editor-bem-Field_NoteArrow::before {
  background-color: #A1A1A1;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-Field_Note-error,
.w-editor-bem-Field_Note-error .w-editor-bem-Field_NoteArrow::before {
  background-color: #DB4748;
}
.w-editor-bem-Field_RequiredBadge {
  background: rgba(231, 34, 34, 0.1);
  border-radius: 3px;
  -webkit-box-shadow: none;
  box-shadow: none;
  margin-top: 2px;
}
.w-editor-bem-Field_Notice-focused.w-editor-bem-Field_Notice-severe {
  color: #DB4748;
  opacity: 1;
}
.w-editor-bem-FieldLabelLink {
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0.5;
  -webkit-transition: opacity 100ms;
  transition: opacity 100ms;
  color: #333;
}
.w-editor-bem-FieldLabelLink:hover {
  color: #333;
  opacity: 1;
}
.w-editor-bem-InlineField {
  margin-top: 9px;
}
.w-editor-bem-InlineItemEditPane_Wrapper {
  z-index: 4;
  overflow: auto;
  pointer-events: auto;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane {
  border: none;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Actions {
  margin-right: 5px;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Title {
  margin-left: 5px;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Body {
  background: white;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Body_Inner {
  padding: 0;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Section {
  padding: 20px 13px;
  border: none;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Section:first-child {
  margin-top: 0;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Pane_Section:last-child {
  margin-bottom: 0;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Field_Label_Text {
  color: #333;
}
.w-editor-bem-InlineItemEditPane .w-editor-bem-Checkbox_Label {
  color: #333;
}
.w-editor-bem-Icon {
  display: inline-block;
}
.w-editor-bem-Icon-dim {
  opacity: 0.2;
}
.w-editor-bem-EditorMainMenu {
  color: #333;
  margin-bottom: -1px;
  padding: 0 8px;
  position: relative;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  z-index: 10;
  -ms-flex-negative: 0;
  flex-shrink: 0;
}
.w-editor-bem-EditorMainMenu_Tabs {
  overflow: hidden;
  border-left: 1px solid #D1D1D1;
  border-right: 1px solid #D1D1D1;
}
.w-editor-bem-EditorMainMenu_Tabs + .w-editor-bem-EditorMainMenu_Tabs {
  border-left: none;
}
.w-editor-bem-EditorMainMenu_Tab + .w-editor-bem-EditorMainMenu_Tab {
  border-left: 1px solid #D1D1D1;
}
.w-editor-bem-EditorMainMenu_Tab {
  cursor: pointer;
  position: relative;
  vertical-align: top;
  background: transparent;
  padding: 0 20px;
  color: inherit;
  line-height: 48px;
}
.w-editor-bem-EditorMainMenu_Tab * {
  cursor: pointer;
}
.w-editor-bem-EditorMainMenu_Tab .w-editor-bem-Text {
  text-decoration: none;
  display: block;
  line-height: 48px;
  font-size: 14px;
}
.w-editor-bem-EditorMainMenu_Tab:hover {
  color: inherit;
  background: rgba(0, 0, 0, 0.04);
}
.w-editor-bem-EditorMainMenu_Tab:hover > i {
  opacity: 0.8;
}
.w-editor-bem-EditorMainMenu_Tab.w-editor-isActive {
  color: inherit;
  background: white;
}
.w-editor-bem-EditorMainMenu_Tab.w-editor-isActive:hover {
  background: white;
}
.w-editor-bem-EditorMainMenu_Tab:active {
  background: rgba(0, 0, 0, 0.04);
}
.w-editor-bem-EditorMainMenu_Tab:active > .w-editor-bem-Text,
.w-editor-bem-EditorMainMenu_Tab:active > i {
  opacity: 0.8;
}
.w-editor-bem-EditorMainMenu_Tab.w-editor-account-tab > .w-editor-bem-Text {
  display: none;
}
.w-editor-bem-EditorMainMenu_Tab.w-editor-account-tab > i {
  opacity: 0.5;
  background-position: 0px 0px;
  width: 23px;
  height: 23px;
}
.w-editor-bem-EditorMainMenu_Tab-icon {
  padding: 0 15px;
}
.w-editor-bem-EditorMainMenu_Tab-account > i {
  opacity: 0.5;
  background-position: 0px 0px;
  width: 23px;
  height: 23px;
}
.w-editor-bem-EditorMainMenu_Tab-help > i {
  opacity: 0.5;
  background-position: -40px 0px;
  width: 23px;
  height: 23px;
}
.w-editor-bem-EditorMainMenu_Tab-logout > i {
  opacity: 0.5;
  background-position: -80px 0px;
  width: 23px;
  height: 23px;
}
.w-editor-bem-EditorMainMenu_Tab_Close {
  position: absolute;
  width: 14px;
  height: 14px;
  top: 0;
  right: 0;
  z-index: 1;
  padding: 2px;
  border-bottom: 1px solid #D1D1D1;
  border-left: 1px solid #D1D1D1;
  border-bottom-left-radius: 3px;
  opacity: 1;
}
.w-editor-bem-EditorMainMenu_Tab_Close i {
  opacity: 0.3;
}
.w-editor-bem-EditorMainMenu_Tab_Close:hover {
  background: white;
  opacity: 1;
}
.w-editor-bem-EditorMainMenu_Tab_Close:active {
  background: #D1D1D1;
}
.w-editor-bem-Note {
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: #8C8C8C;
  color: #FFFFFF;
  -webkit-font-smoothing: antialiased;
  font-size: 13px;
  padding: 3px 7px;
  line-height: 1.5;
}
.w-editor-bem-Note_Arrow::before {
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: #8C8C8C;
}
.w-editor-bem-Note_Text {
  margin: 0 2px;
  color: #FFFFFF;
}
.w-editor-bem-Note_Icon * {
  color: #FFFFFF;
}
.w-editor-bem-Note-error {
  background-color: #D9494C;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-Note-warning {
  background-color: #E4A539;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-Note-error .w-editor-bem-Note_Arrow::before {
  background-color: #D9494C;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-Note-warning .w-editor-bem-Note_Arrow::before {
  background-color: #E4A539;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-NotificationList,
.w-editor-bem-NotificationList-inDataManager {
  top: 0;
  right: 0;
}
.w-editor-bem-Heading {
  color: #333;
}
.w-editor-bem-Heading-h2 {
  font-size: 18px;
  line-height: 21px;
}
.w-editor-bem-ImageInput_Attribute {
  line-height: 17px;
  font-size: 13px;
}
.w-editor-bem-ImageInput_Controls .w-editor-bem-Button + .w-editor-bem-Button {
  margin-left: 10px;
}
.w-editor-bem-ImageInput_Controls .w-editor-bem-FileInput {
  padding-top: 1.5px;
}
.w-editor-bem-ImagePreview {
  border: 1px solid #D1D1D1;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-ItemStatus-staged,
.w-editor-bem-ItemStatus-draft,
.w-editor-bem-ItemStatus-scheduledFailed {
  color: #F5A623;
}
.w-editor-bem-ItemStatus-stagedChanges,
.w-editor-bem-ItemStatus-published {
  color: #299e5f;
}
.w-editor-bem-ItemStatus-archived {
  color: #C0C0C0;
}
.w-editor-bem-Link {
  display: inline;
}
.w-editor-bem-Link:hover {
  color: #666;
}
.w-editor-bem-Menu {
  color: #333;
  -webkit-box-shadow: 0 0 20px rgba(37, 37, 37, 0.2);
  box-shadow: 0 0 20px rgba(37, 37, 37, 0.2);
  border: 1px solid #D1D1D1;
  background: white;
}
.w-editor-bem-Menu_Section + .w-editor-bem-Menu_Section {
  border-top: 1px solid #E3E3E3;
}
.w-editor-bem-Menu_Item:hover {
  background: #f7f7f7;
  color: #333;
}
.w-editor-bem-Pane {
  color: inherit;
  font-size: inherit;
  border: none;
  border-top: 1px solid #D1D1D1;
  position: relative;
  background: white;
}
.w-editor-bem-Pane ::selection {
  background-color: rgba(52, 144, 235, 0.3);
  color: inherit;
}
.w-editor-bem-Pane-lift {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-Pane_Head {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  background: none;
  padding: 0 8px;
  height: 60px;
  max-width: 1200px;
  width: 100%;
  color: inherit;
}
.w-editor-bem-Pane_Head::after {
  content: '';
  position: absolute;
  z-index: 2;
  pointer-events: none;
  height: 60px;
  top: 0;
  left: 0;
  right: 0;
  border-bottom: 1px solid #d6d6d6;
}
.w-editor-bem-Pane_Heading {
  font-size: 18px;
  line-height: 21px;
  margin-top: 24px;
  margin-bottom: 10px;
}
.w-editor-bem-Pane_Heading + .w-editor-bem-Pane_Section {
  border-radius: 4px;
}
.w-editor-bem-Pane_Title {
  text-shadow: none;
}
.w-editor-bem-Pane_Body {
  position: relative;
  overflow: visible;
  background: #F7F7F7;
}
.w-editor-bem-Pane_Body_Inner {
  padding: 0 8px;
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  max-width: 1200px;
  width: 100%;
  min-height: auto;
}
.w-editor-bem-Pane_Head + .w-editor-bem-Pane_Body {
  border-top: none;
}
.w-editor-bem-Pane_Section {
  padding: 20px;
  background: white;
  border: 1px solid #dbdbdb;
}
.w-editor-bem-Pane_Section + .w-editor-bem-Pane_Section {
  border-top: 0;
}
.w-editor-bem-Pane_Section:first-child {
  margin-top: 20px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.w-editor-bem-Pane_Section:last-of-type,
.w-editor-bem-Pane_Section:last-child {
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  margin-bottom: 20px;
}
.w-editor-bem-Pane_Section-standalone {
  border-radius: 4px;
  margin-top: 20px;
  margin-bottom: 20px;
}
.w-editor-bem-Pane_Actions-divided {
  border-right-color: #d9d9d9;
  height: 27px;
}
.w-editor-bem-Pane_Card {
  background-color: white;
  border: 1px solid #dbdbdb;
  -webkit-box-shadow: 0 2px 3px 1px #f4f4f4;
  box-shadow: 0 2px 3px 1px #f4f4f4;
  text-shadow: none;
  margin-top: 60px;
}
.w-editor-bem-Pane_Title_Icon {
  display: inline-block;
}
.w-editor-bem-Pane_Message {
  color: inherit;
  background: #ffffff;
  border-left: 0;
  border: 1px solid #D1D1D1;
}
.w-editor-bem-Pane_Message-locked {
  -webkit-box-shadow: inset 23px 0 0 -20px #facb4b;
  box-shadow: inset 23px 0 0 -20px #facb4b;
}
.w-editor-bem-Pane_Message-warning {
  -webkit-box-shadow: inset 23px 0 0 -20px #facb4b;
  box-shadow: inset 23px 0 0 -20px #facb4b;
}
.w-editor-bem-Pane_Message-dynamic {
  -webkit-box-shadow: inset 23px 0 0 -20px #ae94ff;
  box-shadow: inset 23px 0 0 -20px #ae94ff;
}
.w-editor-bem-Pane_Message-page {
  -webkit-box-shadow: inset 23px 0 0 -20px #2ad986;
  box-shadow: inset 23px 0 0 -20px #2ad986;
}
.w-editor-bem-Pane_Message-info {
  -webkit-box-shadow: inset 23px 0 0 -20px #3B3B3B;
  box-shadow: inset 23px 0 0 -20px #3B3B3B;
}
.w-editor-bem-Pane_Message_Icon {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
}
.w-editor-bem-Pane_Message_Icon-dynamic {
  color: #7469C1;
}
.w-editor-bem-Pane_Message_Icon-info {
  color: #333;
}
.w-editor-bem-Pane_Message_Paragraph {
  color: inherit;
  padding: 6px 0;
  font-size: 14px;
}
.w-editor-bem-Pill {
  background-color: #fafafa;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #E3E3E3;
  padding: 2px 8px;
}
.w-editor-bem-Pill.w-editor-hasError {
  -webkit-box-shadow: 0 0 2px 1px rgba(220, 79, 82, 0.12);
  box-shadow: 0 0 2px 1px rgba(220, 79, 82, 0.12);
  border: 1px solid #DC4F52;
}
.w-editor-bem-Pill.w-editor-isFocused {
  background-color: #fcfcfc;
}
.w-editor-bem-Pill.w-editor-isFocused:not(.w-editor-hasError) {
  border: 1px solid #3490eb;
  outline: none;
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
}
.w-editor-bem-PopoverMenu:after {
  -webkit-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
  box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
}
.w-editor-bem-PopoverMenu_Button {
  padding-left: 8px;
  padding-right: 70px;
  height: 48px;
  background: #E3E3E3;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17);
  border: 0;
  color: #333;
  font-size: 15px;
}
.w-editor-bem-PopoverMenu_Button svg {
  color: rgba(51, 51, 51, 0.85);
}
.w-editor-bem-PopoverMenu_Button:hover {
  background: #EDEDED;
}
.w-editor-bem-PopoverMenu_Button:active {
  background: #DDDDDD;
}
.w-editor-bem-PopoverMenu_Button:active > * {
  opacity: 0.8;
}
.w-editor-bem-PopoverMenu_Button-small {
  font-size: 14px;
  height: 30px;
  padding-left: 6px;
  padding-right: 40px;
}
.w-editor-bem-PopoverMenu_ButtonIcon {
  width: 34px;
}
.w-editor-bem-EditablePill_Icon {
  opacity: 0.3;
}
.w-editor-bem-EditablePill_Input {
  color: #808080;
}
.w-editor-bem-EditablePill .w-editor-bem-Text {
  display: inline-block;
}
.w-editor-bem-Paragraph-dim {
  color: #949393;
}
.w-editor-bem-Scrollbar {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  overflow: scroll;
}
.w-editor-bem-Scrollbar_Inner {
  margin: 0 -1px;
}
.w-editor-bem-SelectInput {
  height: 35px;
  border-radius: 3px;
  font-size: 14px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-SelectInput_Trigger {
  height: 35px;
  background: #F5F5F5;
  border-radius: 3px;
  border: 1px solid #d4d4d4;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  line-height: 32px;
  color: #333;
  -webkit-transition: background 75ms ease;
  transition: background 75ms ease;
}
.w-editor-bem-SelectInput_Trigger:hover {
  background: transparent;
}
.w-editor-bem-SelectInput_Trigger:focus {
  border: 1px solid #3490eb;
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  outline: none;
}
.w-editor-bem-SelectInput_Trigger.w-editor-isExpanded {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.w-editor-bem-SelectInput_Trigger.w-editor-isExpanded:hover {
  background: #F5F5F5;
  border: 1px solid #d4d4d4;
}
.w-editor-bem-SelectInput_Trigger.w-editor-isExpanded:before {
  right: 10px;
  bottom: 14px;
  border-bottom: 5px solid #333;
}
.w-editor-bem-SelectInput_Trigger:not(.w-editor-isExpanded):before {
  right: 10px;
  top: 14px;
  border-top: 5px solid #333;
}
.w-editor-bem-SelectInput_Menu {
  background: #F5F5F5;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  font-size: 14px;
  border: none;
  -webkit-box-shadow: inset 0 0 0 1px #d4d4d4, 0 1px 2px rgba(0, 0, 0, 0.06);
  box-shadow: inset 0 0 0 1px #d4d4d4, 0 1px 2px rgba(0, 0, 0, 0.06);
}
.w-editor-bem-SelectInput_Option {
  color: #333;
  padding: 10px 10px;
}
.w-editor-bem-SelectInput_Option:hover {
  -webkit-box-shadow: inset 1px 0 0 #1577d7, inset -1px 0 0 #1577d7;
  box-shadow: inset 1px 0 0 #1577d7, inset -1px 0 0 #1577d7;
  background-color: #3490eb;
  cursor: pointer;
  color: white;
}
.w-editor-bem-SelectInput_Option:focus {
  color: white;
  background-color: #2688ea;
}
.w-editor-bem-SelectInput_Option-selected {
  background: #D1D1D1;
}
.w-editor-bem-SlugPreview {
  font-size: 12px;
}
.w-editor-bem-Table {
  color: inherit;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-shadow: 0 2px 3px 1px #f4f4f4;
  box-shadow: 0 2px 3px 1px #f4f4f4;
  margin: 30px auto 0;
  border-radius: 4px;
}
.w-editor-bem-Table_Head {
  background: #f0f0f0;
  border: 1px solid #D1D1D1;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.w-editor-bem-Table_Header {
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-weight: 600;
  font-size: 12px;
  letter-spacing: normal;
  color: #333;
  -webkit-font-smoothing: antialiased;
  height: 42px;
  padding: 0 15px;
}
.w-editor-bem-Table_Header-clickable:hover,
.w-editor-bem-Table_Header-selected {
  color: #606064;
}
.w-editor-bem-Table_Body {
  position: relative;
  overflow: auto;
  top: -1px;
}
.w-editor-bem-Table_Row.w-editor-isLastChild,
.w-editor-bem-Table:not(.w-editor-bem-Table-infinite) .w-editor-bem-Table_Row:last-child {
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  border-bottom: 1px solid #D1D1D1;
}
.w-editor-bem-Table_Row-clickable.w-editor-isLastChild:hover,
.w-editor-bem-Table:not(.w-editor-bem-Table-infinite) .w-editor-bem-Table_Row-clickable:last-child:hover {
  border-bottom-color: #B3D3F7;
}
.w-editor-bem-Table_Body:first-child > .w-editor-bem-Table_Row:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.w-editor-bem-Table_Row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-top: 1px solid #D1D1D1;
  border-left: 1px solid #D1D1D1;
  border-right: 1px solid #D1D1D1;
  border-bottom: none;
  background: white;
  -webkit-transition: none;
  transition: none;
  color: #333;
  height: auto;
  min-height: 44px;
}
.w-editor-bem-Table_Row-clickable {
  cursor: pointer;
}
.w-editor-bem-Table_Row-clickable * {
  cursor: pointer;
}
.w-editor-bem-Table_Row-clickable:hover {
  background: #F3F8FC;
  border-color: #B3D3F7;
  color: #333;
}
.w-editor-bem-Table_Row.w-editor-isBulkSelected {
  background-color: #F3F8FC;
  border-color: #B3D3F7;
}
.w-editor-bem-Table_Row-clickable:hover > .w-editor-bem-Table_Cell {
  border-top-color: #B3D3F7;
}
.w-editor-bem-Table_Row-clickable:hover > .w-editor-bem-Table_Cell > .w-editor-bem-Table_Cell_Icon {
  visibility: visible;
}
.w-editor-bem-Table_Row-clickable:hover + .w-editor-bem-Table_Row {
  border-top-color: #B3D3F7;
}
.w-editor-bem-Table_Row-clickable.w-editor-isBulkSelected + .w-editor-bem-Table_Row {
  border-top-color: #B3D3F7;
}
.w-editor-bem-Table_Cell {
  font-size: 14px;
  padding: 8px 15px;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
}
.w-editor-bem-Table_Cell_Icon {
  display: inline-block;
  visibility: hidden;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-focus,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items.w-editor-focus,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-focus:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items.w-editor-focus:hover {
  border: 1px solid #3490eb;
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input > input,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items > input {
  left: 4px !important;
  font-size: 14px;
  line-height: 32px !important;
  color: #333;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item {
  font-size: 12px;
  text-shadow: none;
  border-radius: 3px;
  color: white;
  -webkit-font-smoothing: antialiased;
  background: #7E75C5;
  border: 1px solid #7167bf;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.1);
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove {
  margin-left: 7px;
  margin-bottom: 2px;
  padding: 2px;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove:hover,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove:hover {
  opacity: 1;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown {
  background: #F5F5F5;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  font-size: 14px;
  border: none;
  -webkit-box-shadow: inset 0 0 0 1px #d4d4d4, 0 1px 2px rgba(0, 0, 0, 0.06);
  box-shadow: inset 0 0 0 1px #d4d4d4, 0 1px 2px rgba(0, 0, 0, 0.06);
  text-shadow: none;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content {
  font-size: 14px;
  line-height: 16px;
  color: #333;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option {
  padding: 8px;
  background-color: transparent;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option:last-child {
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option.w-editor-active {
  background-color: #3490eb;
  color: white;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option.w-editor-active .w-editor-highlight {
  color: white;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option.w-editor-active::after {
  margin-right: -10px;
}
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-dropdown .w-editor-selectize-dropdown-content .w-editor-option .w-editor-highlight {
  background: transparent;
  text-decoration: none;
  color: #1a1a1a;
}
.w-editor-bem-TagSelect i.w-editor-search-big {
  top: 10px;
}
.w-editor-bem-TagSelect + .w-editor-bem-Button {
  height: 35px;
}
.w-editor-bem-Text-dim {
  color: #b3b3b3;
}
.w-editor-bem-Text-small {
  font-size: 14px;
}
.w-editor-bem-TextInput,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full {
  background-color: #fcfcfc;
  border: 1px solid #D1D1D1;
  -webkit-box-shadow: none;
  box-shadow: none;
  cursor: text;
  font-size: inherit;
  line-height: 17px;
  padding-left: 10px;
  padding-right: 10px;
  text-shadow: none;
  -webkit-transition: -webkit-box-shadow 75ms ease;
  transition: -webkit-box-shadow 75ms ease;
  transition: box-shadow 75ms ease;
  transition: box-shadow 75ms ease, -webkit-box-shadow 75ms ease;
}
.w-editor-bem-TextInput::-webkit-input-placeholder {
  color: #737373;
}
.w-editor-bem-TextInput:focus {
  border: 1px solid #3490eb;
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  background-color: white;
  outline: none;
}
.w-editor-bem-TextInput.w-editor-hasError {
  -webkit-box-shadow: 0 0 2px 1px rgba(220, 79, 82, 0.12);
  box-shadow: 0 0 2px 1px rgba(220, 79, 82, 0.12);
  border: 1px solid #DC4F52;
}
.w-editor-bem-TextInput:disabled {
  background-color: #eee;
}
.w-editor-bem-TextInput-search {
  height: 35px;
  padding-left: 32px;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 17 17'><path fill='#888888' d='M15.53 14.47l-3.795-3.795A5.966 5.966 0 0 0 13 7a6 6 0 1 0-6 6 5.97 5.97 0 0 0 3.675-1.264l3.795 3.795 1.06-1.06zM7 11.5c-2.48 0-4.5-2.02-4.5-4.5S4.52 2.5 7 2.5s4.5 2.02 4.5 4.5-2.02 4.5-4.5 4.5z'></path></svg>");
  background-size: 17px 17px;
  background-position: 9px center;
  border-radius: 3px;
}
.w-editor-bem-TextInput-search:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #3490eb;
}
.w-editor-bem-Tooltip {
  color: rgba(0, 0, 0, 0.8);
}
.w-editor-bem-Tooltip_Body {
  max-width: 224px;
  padding: 5px;
  font-size: 12px;
  color: #fff;
}
.w-editor-bem-ColorInput {
  position: relative;
}
.w-editor-bem-ColorButton {
  position: relative;
  width: 32px;
  height: 33px;
  top: 1px;
  background: #F5F5F5;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
  border-right: 1px solid #d4d4d4;
  -webkit-transition: background 100ms ease;
  transition: background 100ms ease;
  overflow: hidden;
  z-index: 1;
  cursor: pointer;
}
.w-editor-bem-ColorButton:hover {
  background: #fdfdfd;
  border-color: #d9d9d9;
}
.w-editor-bem-ColorButton_Icon {
  position: absolute;
  pointer-events: none;
}
.w-editor-bem-ColorButton_Icon:first-child {
  top: 0px;
  left: 2px;
  opacity: 0.5;
}
.w-editor-bem-ColorButton_Icon:last-child {
  bottom: 0;
  right: 0;
  top: 0;
  left: 0;
  opacity: 1;
}
.w-editor-bem-ColorButton.w-editor-isSet {
  -webkit-box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.25);
  border-right: none;
  height: 35px;
  width: 33px;
  top: 0;
  left: -1px;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.w-editor-bem-ColorButton.w-editor-isSet .w-editor-bem-ColorButton_Icon {
  bottom: 0;
  right: 0;
  top: 4px;
  left: 3px;
  opacity: 1;
}
.w-editor-bem-ColorButton + .w-editor-bem-TextInput {
  margin-left: -33px;
  padding-left: 42px;
}
.w-editor-bem-ColorButton:hover + .w-editor-bem-TextInput:focus {
  border: 1px solid #3490eb;
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  background: white;
}
.w-editor-bem-ColorButton_Fill {
  background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACpJREFUeNpi3LFjBwM2oK2tjVWciYFEMKqBGMCCK7yvXr06Gkr00wAQYACiEgXLqZw3aAAAAABJRU5ErkJggg==');
  background-size: 8px;
  background-position: 0% 0%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border-top-left-radius: 3px -1px;
  border-bottom-left-radius: 3px -1px;
  pointer-events: none;
}
.w-editor-bem-ColorButton_Fill.w-editor-isSet {
  background-image: none;
  border: 1px solid rgba(0, 0, 0, 0.13);
}
.w-editor-bem-ColorPicker {
  height: 173px;
  width: 228px;
  padding: 10px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.w-editor-bem-ColorPicker:before,
.w-editor-bem-ColorPicker:after {
  content: " ";
  display: table;
  -ms-grid-column: 1;
  grid-column-start: 1;
  -ms-grid-row: 1;
  grid-row-start: 1;
  -ms-grid-column-span: 1;
  grid-column-end: 2;
  -ms-grid-row-span: 1;
  grid-row-end: 2;
}
.w-editor-bem-ColorPicker:after {
  clear: both;
}
.w-editor-bem-ColorPicker_Hue,
.w-editor-bem-ColorPicker_Color,
.w-editor-bem-ColorPicker_Opacity {
  float: left;
  height: 150px;
  margin-right: 9px;
  border: none;
  width: 20px;
  cursor: crosshair;
  position: relative;
  border-radius: 2px;
}
.w-editor-bem-ColorPicker_Hue:after,
.w-editor-bem-ColorPicker_Color:after,
.w-editor-bem-ColorPicker_Opacity:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border: 1px solid rgba(0, 0, 0, 0.3);
  border-radius: 2px;
  z-index: 1;
}
.w-editor-bem-ColorPicker_Hue_Handle,
.w-editor-bem-ColorPicker_Color_Handle,
.w-editor-bem-ColorPicker_Opacity_Handle {
  height: 0px;
  width: 0px;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 2;
}
.w-editor-bem-ColorPicker_Hue_Handle.w-editor-animate,
.w-editor-bem-ColorPicker_Color_Handle.w-editor-animate,
.w-editor-bem-ColorPicker_Opacity_Handle.w-editor-animate {
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.w-editor-bem-ColorPicker_Hue_Handle_Nub,
.w-editor-bem-ColorPicker_Opacity_Handle_Nub,
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground {
  display: block;
  position: absolute;
  top: -4px;
  left: -2px;
}
.w-editor-bem-ColorPicker_Hue_Handle_Nub::before,
.w-editor-bem-ColorPicker_Opacity_Handle_Nub::before,
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground::before,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground::before,
.w-editor-bem-ColorPicker_Hue_Handle_Nub::after,
.w-editor-bem-ColorPicker_Opacity_Handle_Nub::after,
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground::after,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground::after {
  position: absolute;
  border-width: 4px;
  border-style: solid;
  border-color: transparent;
  content: '';
}
.w-editor-bem-ColorPicker_Hue_Handle_Nub::before,
.w-editor-bem-ColorPicker_Opacity_Handle_Nub::before,
.w-editor-bem-ColorPicker_Hue_Handle_Nub::after,
.w-editor-bem-ColorPicker_Opacity_Handle_Nub::after {
  position: absolute;
  border-width: 4px;
}
.w-editor-bem-ColorPicker_Hue_Handle_Nub::before,
.w-editor-bem-ColorPicker_Opacity_Handle_Nub::before {
  border-left-color: #333;
}
.w-editor-bem-ColorPicker_Hue_Handle_Nub::after,
.w-editor-bem-ColorPicker_Opacity_Handle_Nub::after {
  left: 16px;
  border-right-color: #333;
}
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground {
  display: block;
  position: absolute;
  top: -5px;
}
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground::before,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground::before,
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground::after,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground::after {
  border-width: 5px;
}
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground::before,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground::before {
  border-left-color: #F5F5F5;
}
.w-editor-bem-ColorPicker_Hue_Handle_NubBackground::after,
.w-editor-bem-ColorPicker_Opacity_Handle_NubBackground::after {
  left: 14px;
  border-right-color: #F5F5F5;
}
.w-editor-bem-ColorPicker_Hue {
  background-image: -webkit-gradient(linear, left top, left bottom, from(red), color-stop(17%, #fc29fc), color-stop(33%, #0b26fb), color-stop(49%, #2cfffe), color-stop(66%, #29fd3f), color-stop(83%, #f9ff00), to(red));
  background-image: linear-gradient(red, #fc29fc 17%, #0b26fb 33%, #2cfffe 49%, #29fd3f 66%, #f9ff00 83%, red);
  background-size: 100%;
}
.w-editor-bem-ColorPicker_Color {
  width: 150px;
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), to(black)), -webkit-gradient(linear, left top, right top, from(white), to(rgba(255, 255, 255, 0)));
  background-image: linear-gradient(rgba(0, 0, 0, 0), black), linear-gradient(to right, white, rgba(255, 255, 255, 0));
  background-position-x: 150px;
  background-size: 150px;
}
.w-editor-bem-ColorPicker_Color_Handle_Nub,
.w-editor-bem-ColorPicker_Color_Handle_NubBackground {
  position: absolute;
  left: -4px;
  top: -4px;
  width: 8px;
  height: 8px;
}
.w-editor-bem-ColorPicker_Color_Handle_Nub::before,
.w-editor-bem-ColorPicker_Color_Handle_NubBackground::before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border-radius: 50%;
  content: '';
}
.w-editor-bem-ColorPicker_Color_Handle_Nub::before {
  border: 1px solid white;
}
.w-editor-bem-ColorPicker_Color_Handle_NubBackground::before {
  top: -1px;
  bottom: -1px;
  left: -1px;
  right: -1px;
  border: 3px solid rgba(0, 0, 0, 0.4);
}
.w-editor-bem-ColorPicker_Opacity {
  position: relative;
  margin-right: 0;
}
.w-editor-bem-ColorPicker_Opacity_Background,
.w-editor-bem-ColorPicker_Opacity_Foreground {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.w-editor-bem-ColorPicker_Opacity_Background {
  background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACpJREFUeNpi3LFjBwM2oK2tjVWciYFEMKqBGMCCK7yvXr06Gkr00wAQYACiEgXLqZw3aAAAAABJRU5ErkJggg==');
  background-size: 8px;
  border-radius: 2px;
}
.w-editor-bem-DateInput {
  position: relative;
}
.w-editor-bem-DateInput:hover .w-editor-bem-TextInput:not(:focus) {
  -webkit-box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.08), 0 0 2px 1px rgba(255, 255, 255, 0.08);
  box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.08), 0 0 2px 1px rgba(255, 255, 255, 0.08);
}
.w-editor-bem-DateInput .w-editor-bem-TextInput {
  padding-left: 38px;
}
.w-editor-bem-DateInput_Button {
  position: absolute;
  top: 1px;
  left: 1px;
}
.w-editor-bem-DateInput_Mask {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 10;
}
.w-editor-bem-DateTimeSwitch_Cell {
  border-color: #cfcfcf;
}
.w-editor-bem-DateTimeSwitch_Button {
  color: currentColor;
}
.w-editor-bem-DateTimeSwitch_Button-selected {
  background: #e5e5e5;
}
.w-editor-bem-DateTimeSwitch_Button-disabled {
  background: inherit;
  cursor: not-allowed;
}
.w-editor-bem-DateButton {
  position: relative;
  width: 32px;
  height: 33px;
  background: #F5F5F5;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
  border-right: 1px solid #d4d4d4;
  -webkit-transition: background 75ms ease;
  transition: background 75ms ease;
  overflow: hidden;
  cursor: pointer;
}
.w-editor-bem-DateButton:hover {
  background: #fdfdfd;
  border-color: #d9d9d9;
}
.w-editor-bem-DateButton-left {
  border-top-left-radius: 1px;
  border-bottom-left-radius: 1px;
  border-right: 1px solid #ccc;
}
.w-editor-bem-DateButton-right {
  border-top-right-radius: 1px;
  border-bottom-right-radius: 1px;
  border-right: 1px solid #ccc;
}
.w-editor-bem-DateButton-disabled,
.w-editor-bem-DateButton-disabled:hover {
  opacity: 0.5;
  cursor: not-allowed;
  background: #F5F5F5;
}
.w-editor-bem-DateButton_Icon {
  height: 100%;
  opacity: 0.7;
}
.w-editor-bem-DatePicker {
  color: inherit;
}
.w-editor-bem-DatePicker_Head {
  background: #eee;
  border-color: #ddd;
}
.w-editor-bem-DatePicker_Day-disabled,
.w-editor-bem-DatePicker_Day-activeNotCurrentMonth {
  color: #bbb;
}
.w-editor-bem-DatePicker_Day-activeCurrentMonth:hover,
.w-editor-bem-DatePicker_Day-activeNotCurrentMonth:hover {
  background: #ddd;
}
.w-editor-bem-DatePicker_Day-current {
  background: #FFE0E0;
}
.w-editor-bem-DatePicker_Day-selected {
  color: #fff;
  background: #3490eb;
}
.w-editor-bem-DatePicker_Day-selected:hover {
  background: #3490eb;
}
.w-editor-bem-TimePicker_Heading {
  color: #555;
}
.w-editor-bem-TimePicker_Button {
  color: currentColor;
  border-color: #cfcfcf;
  background: #e5e5e5;
}
.w-editor-bem-TimePicker_Button-disabled {
  color: #737373;
}
.w-editor-bem-TimePicker_Button-active:hover {
  background: #ddd;
  color: #333;
}
.w-editor-bem-TimePicker_Button-selected {
  color: #fff;
  background: #3490eb;
  border-color: #3490eb;
}
.w-editor-bem-TimePicker_Button-selected:hover {
  color: #fff;
  background: #3490eb;
}
.w-editor-bem-TimePicker_SwitchButton {
  color: currentColor;
}
.w-editor-bem-TimePicker_SwitchButton:hover {
  background: #ddd;
  color: #333;
}
.w-editor-bem-TimePicker_SwitchButton-selected {
  color: #fff;
}
.w-editor-bem-TimePicker_SwitchButton-selected:hover {
  color: #fff;
  background: #3490eb;
}
.w-editor-bem-TimePicker_SwitchButton-disabled,
.w-editor-bem-TimePicker_SwitchButton-disabled:hover {
  background: inherit;
  color: #3B3B3B;
  opacity: 0.5;
  cursor: not-allowed;
}
.w-editor-bem-TimePicker-disabled {
  color: #737373;
  pointer-events: none;
}
.w-editor-bem-Switch {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
}
.w-editor-bem-Switch_Switch {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #F1F1F1;
  border-radius: 999px;
  border: 1px solid #cecece;
  -webkit-box-shadow: none;
  box-shadow: none;
  cursor: pointer;
  display: inline-block;
  outline: none;
  overflow: hidden;
  -webkit-transition: background-color 200ms ease;
  transition: background-color 200ms ease;
  width: 40px;
}
.w-editor-bem-Switch_Switch::before {
  -webkit-box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.03);
  box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.03);
  display: block;
  border-radius: 999px;
  padding-top: 60%;
  width: 60%;
  background-color: white;
  content: '';
  -webkit-transition: 200ms;
  transition: 200ms;
  margin: -1px;
  border: inherit;
}
.w-editor-bem-Switch_Input {
  display: none;
}
.w-editor-bem-Switch_Input:checked + .w-editor-bem-Switch_Switch {
  background-color: #3490eb;
  border-color: #1471ce;
}
.w-editor-bem-Switch_Input:checked + .w-editor-bem-Switch_Switch::before {
  margin-left: calc(38%);
}
.w-editor-bem-Switch_Input:disabled + .w-editor-bem-Switch_Switch {
  opacity: 0.4;
  cursor: default;
}
.w-editor-bem-Switch_Text {
  margin-left: 10px;
  color: #b3b3b3;
  font-weight: normal;
  -webkit-transition: color 200ms ease;
  transition: color 200ms ease;
}
.w-editor-bem-Switch_Input:checked ~ .w-editor-bem-Switch_Text {
  color: #3490eb;
}
/**
 * 1. Prevents children overflowing rounded borders.
 */
.w-editor-bem-Popup {
  position: absolute;
  top: 45px;
  left: 0;
  background-color: #F5F5F5;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.14), 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.14), 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
  outline: none;
  z-index: 11;
  overflow: hidden;
  /* 1 */
}
.w-editor-bem-Popup-top {
  top: auto;
  bottom: 45px;
}
.w-editor-bem-Mask {
  position: fixed;
  top: 0;
  right: 0;
  width: 241px;
  height: 100%;
  pointer-events: none;
  z-index: 10;
}
.w-editor-bem-Mask.w-editor-isActive,
.w-editor-bem-Mask.w-editor-isSolid {
  pointer-events: all;
}
.w-editor-bem-Mask-full {
  left: 0;
  width: 100%;
}
.w-editor-bem-Mask-crosshair-cursor {
  cursor: crosshair;
}
.w-editor-bem-NumberInput {
  position: relative;
}
.w-editor-bem-NumberInput_Units {
  position: absolute;
  color: #737373;
  padding: 0 8px;
  line-height: 35px;
  right: 24px;
}
.w-editor-bem-NumberInput_Units-left {
  left: 0;
  right: auto;
}
.w-editor-bem-NumberInput > .w-editor-bem-TextInput {
  padding-right: 33px;
}
.w-editor-bem-NumberInput_Ticks {
  position: absolute;
  top: 0;
  right: 0;
  width: 24px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
}
.w-editor-bem-NumberInput_Ticks_Button {
  background: #F5F5F5;
  border: 1px solid #d4d4d4;
  position: relative;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  -webkit-transition: background 100ms ease;
  transition: background 100ms ease;
}
.w-editor-bem-NumberInput_Ticks_Button:hover {
  background: #fdfdfd;
  border-color: #d9d9d9;
}
.w-editor-bem-NumberInput_Ticks_Button-up {
  border-top-right-radius: 3px;
}
.w-editor-bem-NumberInput_Ticks_Button-down {
  border-top-width: 0;
  border-bottom-right-radius: 3px;
}
.w-editor-bem-NumberInput_Ticks_Button:active {
  color: #333;
  background: #ebebeb;
  border-color: #dcdcdc;
  -webkit-box-shadow: inset 0 -15px 30px -17px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(0, 0, 0, 0.08);
  box-shadow: inset 0 -15px 30px -17px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(0, 0, 0, 0.08);
}
.w-editor-bem-NumberInput_Ticks_Button-disabled {
  opacity: 0.5;
  cursor: not-allowed;
  pointer-events: none;
}
.w-editor-bem-NumberInput_Ticks_Button_Icon {
  opacity: 0.7;
}
.w-editor-bem-NumberInput_Ticks_Button_Icon:hover {
  opacity: 1;
}
.w-editor-bem-CommercePriceInput {
  position: relative;
}
.w-editor-bem-CommercePriceInput_Units {
  position: absolute;
  color: #737373;
  padding: 0 8px;
  line-height: 35px;
  right: 24px;
}
.w-editor-bem-CommercePriceInput_Units-left {
  left: 0;
  right: auto;
}
.w-editor-bem-CommercePriceInput > .w-editor-bem-TextInput {
  padding-right: 33px;
}
.w-editor-bem-PageText {
  font-size: 14px;
}
.w-editor-bem-PageText-sub {
  margin-left: 10px;
  color: #A6A6A6;
}
.w-editor-bem-PageBranch-bar {
  width: 8px;
  margin-left: 4px;
  margin-right: 8px;
  border-left: 2px solid #DDD;
  height: 44px;
}
.w-editor-bem-PageBranch-fork::before {
  width: 8px;
  margin-left: 4px;
  margin-right: 8px;
  border-left: 2px solid #DDD;
  display: block;
  position: absolute;
  height: 44px;
  margin-top: 0;
  margin-left: -2px;
  content: '';
}
.w-editor-bem-PageBranch-right,
.w-editor-bem-PageBranch-fork {
  width: 8px;
  margin-left: 4px;
  margin-right: 8px;
  border-left: 2px solid #DDD;
  height: 24px;
  margin-top: -20px;
  border-bottom: 2px solid #DDD;
  border-bottom-left-radius: 10px;
}
.w-editor-bem-PageBranch-empty {
  width: 8px;
  margin-left: 4px;
  margin-right: 8px;
  border-left: 2px solid #DDD;
  border-color: transparent;
}
/**
  NOTE: If changing layout or size of sections, make sure to also update
  height constants in EditorPagesPane.jsx. Otherwise, virtual scroller
  will most likely break.
*/
.w-editor-bem-EditorPagesPane_Head {
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.w-editor-bem-EditorPagesPane_Heading {
  margin-top: 30px;
}
.w-editor-bem-EditorPagesPane_Table {
  margin-top: 20px;
  -webkit-box-shadow: none;
  box-shadow: none;
  min-width: 470px;
}
.w-editor-bem-EditorPagesPane_Table_Head,
.w-editor-bem-EditorPagesPane_Table_Body {
  min-width: 471px;
}
.w-editor-bem-EditorPagesPane_Table_Header:nth-child(1),
.w-editor-bem-EditorPagesPane_Table_Cell:nth-child(1) {
  min-width: 150px;
}
.w-editor-bem-EditorPagesPane_Table_Header:nth-child(2),
.w-editor-bem-EditorPagesPane_Table_Cell:nth-child(2) {
  min-width: 320px;
}
.w-editor-bem-EditorPagesPane_Table_Cell {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  overflow: hidden;
  white-space: nowrap;
}
.w-editor-bem-EditorPagesPane_Table_Cell_Button {
  height: 28px;
  line-height: 26px;
  padding: 0 6px;
  font-size: 12px;
  visibility: hidden;
}
.w-editor-bem-EditorPagesPane_Table_Cell_Button * {
  visibility: hidden;
}
.w-editor-bem-EditorPagesPane_Table_Row:hover .w-editor-bem-EditorPagesPane_Table_Cell_Button {
  visibility: visible;
}
.w-editor-bem-EditorPagesPane_Table_Row:hover .w-editor-bem-EditorPagesPane_Table_Cell_Button * {
  visibility: visible;
}
.w-editor-bem-EditorPagesPane_Table_PageTextCell {
  padding: 8px 0 8px 15px;
}
.w-editor-bem-EditorPagesPane_Table_PageTextCell_Text {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.w-editor-bem-TokenInput {
  font-size: 14px;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) {
  border: none;
}
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror-focused,
.w-editor-bem-TokenInput:not(.w-editor-bem-TokenInput-code) .CodeMirror-focused:hover {
  border: 1px solid #418DD7;
  -webkit-box-shadow: 0 0 2px 1px rgba(65, 141, 215, 0.12);
  box-shadow: 0 0 2px 1px rgba(65, 141, 215, 0.12);
  background: white;
  outline: none;
}
.w-editor-bem-TokenInput_Menu {
  overflow-y: auto;
}
.w-editor-bem-TokenInput .w-add-field-button {
  color: #726BBF;
}
.w-editor-bem-TokenInput .w-add-field-button:hover {
  color: #837dc7;
}
.w-editor-bem-TokenInput_Token {
  height: 19px;
  color: #726BBF;
  line-height: 18px;
  background-color: #FFF;
  border: 1px solid #DBDBDB;
  font-size: 13px;
}
.w-editor-bem-TokenInput_Token-disabled {
  background-color: #DCDCDC;
}
.w-editor-bem-TokenInput_Token:not(.w-editor-bem-TokenInput_Token-readOnly):not(.w-editor-bem-TokenInput_Token-disabled):hover {
  background-color: #F3F2FF;
  border-color: rgba(114, 107, 191, 0.6);
}
.w-editor-bem-TokenInput_Token:not(.w-editor-bem-TokenInput_Token-readOnly):not(.w-editor-bem-TokenInput_Token-disabled).w-editor-active {
  background-color: #F3F2FF;
  border-color: rgba(114, 107, 191, 0.6);
}
.w-editor-bem-TokenInput .cm-s-webflow-material.CodeMirror-focused .CodeMirror-selected {
  background: rgba(52, 144, 235, 0.3);
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-line {
  line-height: 20px;
}
.w-editor-bem-TokenInput .cm-s-webflow-material .CodeMirror-gutter-wrapper {
  line-height: 20px;
}
.w-editor-bem-TokenInput .cm-s-webflow-material div.CodeMirror-cursor {
  border-left: 1px solid #3B3B3B;
}
.w-editor-bem-SearchResultPreview {
  max-width: 613px;
  border: 1px solid #E3E3E3;
  background-color: #FAFAFA;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-SearchResultPreview_Arrow {
  color: #D1D1D1;
}
.w-editor-bem-SearchResultPreview_Heading {
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  color: #1a0dab;
}
.w-editor-bem-SearchResultPreview-seo .w-editor-bem-SearchResultPreview_Heading {
  width: 485px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
/* Collection default theme */

.ReactVirtualized__Collection {
}

.ReactVirtualized__Collection__innerScrollContainer {
}

/* Grid default theme */

.ReactVirtualized__Grid {
}

.ReactVirtualized__Grid__innerScrollContainer {
}

/* Table default theme */

.ReactVirtualized__Table {
}

.ReactVirtualized__Table__Grid {
}

.ReactVirtualized__Table__headerRow {
  font-weight: 700;
  text-transform: uppercase;
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-direction: row;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  flex-direction: row;
  -ms-flex-align: center;
      -webkit-box-align: center;
      align-items: center;
}
.ReactVirtualized__Table__row {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-direction: row;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  flex-direction: row;
  -ms-flex-align: center;
      -webkit-box-align: center;
      align-items: center;
}

.ReactVirtualized__Table__headerTruncatedText {
  display: inline-block;
  max-width: 100%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.ReactVirtualized__Table__headerColumn,
.ReactVirtualized__Table__rowColumn {
  margin-right: 10px;
  min-width: 0px;
}
.ReactVirtualized__Table__rowColumn {
  text-overflow: ellipsis;
  white-space: nowrap;
}

.ReactVirtualized__Table__headerColumn:first-of-type,
.ReactVirtualized__Table__rowColumn:first-of-type {
  margin-left: 10px;
}
.ReactVirtualized__Table__sortableHeaderColumn {
  cursor: pointer;
}

.ReactVirtualized__Table__sortableHeaderIconContainer {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
      -webkit-box-align: center;
      align-items: center;
}
.ReactVirtualized__Table__sortableHeaderIcon {
  -ms-flex: 0 0 24px;
      -webkit-box-flex: 0;
      flex: 0 0 24px;
  height: 1em;
  width: 1em;
  fill: currentColor;
}

/* List default theme */

.ReactVirtualized__List {
}

.ReactVirtualized__Table__sortableHeaderColumn {
  cursor: default;
}
.ReactVirtualized__Table__sortableHeaderColumn:hover {
  color: #606064;
}
.ReactVirtualized__Table__Grid {
  outline: none;
}
.w-editor-bem-BarButton {
  max-width: 38px;
  width: 38px;
  min-width: 32px;
  height: 31px;
  border-right: 1px solid #212121;
  overflow: hidden;
  padding: 0;
  margin: 0;
  display: block;
  float: left;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  -webkit-transition: background-color 75ms ease, -webkit-box-shadow 75ms ease;
  transition: background-color 75ms ease, -webkit-box-shadow 75ms ease;
  transition: box-shadow 75ms ease, background-color 75ms ease;
  transition: box-shadow 75ms ease, background-color 75ms ease, -webkit-box-shadow 75ms ease;
  background: #E8E8E8;
  -webkit-box-shadow: inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
  box-shadow: inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
  border-color: #c9c9c9;
}
.w-editor-bem-BarButton-growmod {
  width: auto;
}
.w-editor-bem-BarButton_IconContainer {
  max-width: 38px;
  min-width: 32px;
  height: 31px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  color: #4C4C4C;
  pointer-events: none;
}
.w-editor-bem-BarButton_Icon {
  color: inherit;
  margin: auto;
}
.w-editor-bem-BarButton * {
  cursor: pointer;
}
.w-editor-bem-BarButton:first-child {
  border-radius: 2px 0 0 2px;
}
.w-editor-bem-BarButton:last-child {
  border-radius: 0 2px 2px 0;
  border-right: none;
}
.w-editor-bem-BarButton_ButtonLink {
  border-right: 1px solid #c9c9c9;
}
.w-editor-bem-BarButton:not(.w-editor-bem-BarButton-disabled):hover {
  background-color: #f5f5f5;
}
.w-editor-bem-BarButton:not(.w-editor-bem-BarButton-disabled):hover .w-editor-bem-BarButton_IconContainer {
  color: #0d0d0d;
}
.w-editor-bem-BarButton-active .w-editor-bem-BarButton_IconContainer {
  color: #248ae3;
}
.w-editor-bem-BarButton-active:not(.w-editor-bem-BarButton-disabled):hover .w-editor-bem-BarButton_IconContainer {
  color: #2f8fe4;
}
.w-editor-bem-BarButton-disabled .w-editor-bem-BarButton_IconContainer {
  opacity: 0.3;
  cursor: default;
}
.w-editor-bem-BarButton-inModal {
  margin-right: -1px;
  border: 1px solid transparent;
  display: inline-block;
  width: 41px;
  max-width: 41px;
  height: 35px;
  padding: 2px 0 0 2px;
  background: -webkit-gradient(linear, left top, left bottom, from(#fafafa), to(#f5f5f5));
  background: linear-gradient(to bottom, #fafafa 0%, #f5f5f5 100%);
  border-color: #d9d9d9;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  cursor: pointer;
}
.w-editor-bem-BarButton-inModal:first-child {
  border-radius: 3px 0 0 3px;
}
.w-editor-bem-BarButton-inModal:last-child {
  border-radius: 0 3px 3px 0;
  border-right: 1px solid #c9c9c9;
}
.w-editor-bem-BarButton-inModal * {
  cursor: pointer;
}
.w-editor-bem-BarButton-inModal .w-editor-bem-BarButton-active,
.w-editor-bem-BarButton-inModal .w-editor-bem-BarButton-active:hover {
  background: -webkit-gradient(linear, left top, left bottom, from(#ececec), color-stop(10%, #fff));
  background: linear-gradient(to bottom, #ececec 0%, #fff 10%);
  background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#fafafa));
  background: linear-gradient(to bottom, #ffffff 0%, #fafafa 100%);
  display: block;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
  z-index: 1;
}
.w-editor-bem-BarButton-inModal .w-editor-bem-BarButton-active:hover {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#fafafa));
  background: linear-gradient(to bottom, #ffffff 0%, #fafafa 100%);
}
.w-editor-bem-BarButton-inModal:hover {
  background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#fafafa));
  background: linear-gradient(to bottom, #ffffff 0%, #fafafa 100%);
}
.w-editor-bem-PositionButtons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.w-editor-bem-KitDropDown {
  display: inline-block;
  position: relative;
  width: 100%;
  padding-right: 0px;
  margin-top: 2px;
  margin-bottom: 2px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  height: 30px;
  -webkit-box-shadow: 0 1px 0 rgba(230, 230, 230, 0.07), inset 0 1px 0 rgba(255, 255, 255, 0.08);
  box-shadow: 0 1px 0 rgba(230, 230, 230, 0.07), inset 0 1px 0 rgba(255, 255, 255, 0.08);
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 3px;
  font-size: 13px;
}
.w-editor-bem-KitDropDown_Selected {
  width: 100%;
  height: 31px;
  padding: 0 10px;
  cursor: pointer;
  border-radius: 3px;
  background: #f5f5f5;
  border: 1px solid #d4d4d4;
  line-height: 32px;
  color: #262626;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.25);
}
.w-editor-bem-KitDropDown_Selected-open {
  border-radius: 3px 3px 0 0;
}
.w-editor-bem-KitDropDown_Selected:hover {
  background: transparent;
}
.w-editor-bem-KitDropDown_Caret {
  width: 0;
  height: 0;
  position: absolute;
  right: 10px;
  top: 14px;
  border-top: 5px solid #262626;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  pointer-events: none;
  -webkit-transition: border-top 50ms;
  transition: border-top 50ms;
}
.w-editor-bem-KitDropDown_Caret-open {
  border-bottom: 5px solid #262626;
  border-top: none;
  -webkit-transition: border-bottom 50ms;
  transition: border-bottom 50ms;
}
.w-editor-bem-KitDropDown_List {
  position: absolute;
  left: 0;
  max-height: 0px;
  border: 0 solid transparent;
  overflow: auto;
  display: none;
  padding: 2px 0px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.08);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.08);
  width: 100%;
  line-height: 30px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: left;
  color: #d6d6d6;
  background: #f5f5f5;
  border: none;
  right: 0px!important;
  margin: -1px 0;
}
.w-editor-bem-KitDropDown_List-open {
  max-height: 151px;
  border-width: 1px;
  border-top-width: 0;
  display: block;
}
.w-editor-bem-KitDropDown_Option {
  padding: 0px 10px;
  height: 25px;
  line-height: 27px;
  cursor: pointer;
  border-left: 1px solid #d9d9d9;
  border-right: 1px solid #d9d9d9;
  color: #555;
}
.w-editor-bem-KitDropDown_Option:first-child {
  border-top: 1px solid #d9d9d9;
}
.w-editor-bem-KitDropDown_Option:last-child {
  border-bottom: 1px solid #d9d9d9;
}
.w-editor-bem-KitDropDown_Option:hover {
  background: #4e87bf;
  color: #fff;
  border-left: 1px solid #2873bd;
  border-right: 1px solid #2873bd;
}
.w-editor-bem-KitDropDown_Option:hover:last-child {
  border-bottom: 1px solid #2873bd;
}
.w-editor-bem-KitDropDown_Option:active {
  background-color: #4478a9;
  color: #fff;
  outline: none;
}
.w-editor-bem-RichTextInput {
  min-height: 140px;
  overflow: visible;
  border: 1px solid #D1D1D1;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 3px;
  -webkit-transition: color 75ms ease, border 75ms ease, -webkit-box-shadow 75ms ease;
  transition: color 75ms ease, border 75ms ease, -webkit-box-shadow 75ms ease;
  transition: box-shadow 75ms ease, color 75ms ease, border 75ms ease;
  transition: box-shadow 75ms ease, color 75ms ease, border 75ms ease, -webkit-box-shadow 75ms ease;
}
.w-editor-bem-RichTextInput:hover {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-RichTextInput.w-editor-hasError {
  -webkit-box-shadow: 0 0 0 1px #ea384c;
  box-shadow: 0 0 0 1px #ea384c;
}
.w-editor-bem-RichTextInput.w-editor-hasError > input.w-editor-input {
  color: #ff5266;
}
.w-editor-bem-RichTextInput.w-focus {
  border: 1px solid #3490eb;
  outline: none;
  -webkit-box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
  box-shadow: 0 0 2px 1px rgba(52, 144, 235, 0.12);
}
.w-editor-bem-RichTextInput.w-focus .w-editor-bem-RichTextInput_Content {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.w-editor-bem-RichTextInput_Content {
  display: block;
  padding: 8px 10px;
  background: #fcfcfc;
  color: #333333;
  font-family: inherit;
  font-size: inherit;
  text-shadow: none;
  width: 100%;
  overflow: auto;
  cursor: text;
  min-height: 140px;
  border-radius: 3px;
  -webkit-user-select: text;
  -moz-user-select: text;
  -ms-user-select: text;
  user-select: text;
}
.w-editor-bem-RichTextInput_Content:focus {
  outline: none;
  background: white;
}
.w-editor-bem-RichTextInput_Content h1,
.w-editor-bem-RichTextInput_Content h2,
.w-editor-bem-RichTextInput_Content h3,
.w-editor-bem-RichTextInput_Content h4,
.w-editor-bem-RichTextInput_Content h5,
.w-editor-bem-RichTextInput_Content h6 {
  font-weight: bold;
  margin-bottom: 10px;
}
.w-editor-bem-RichTextInput_Content h1 {
  font-size: 38px;
  line-height: 44px;
  margin-top: 20px;
}
.w-editor-bem-RichTextInput_Content h2 {
  font-size: 32px;
  line-height: 36px;
  margin-top: 20px;
}
.w-editor-bem-RichTextInput_Content h3 {
  font-size: 24px;
  line-height: 30px;
  margin-top: 20px;
}
.w-editor-bem-RichTextInput_Content h4 {
  font-size: 18px;
  line-height: 24px;
  margin-top: 10px;
}
.w-editor-bem-RichTextInput_Content h5 {
  font-size: 14px;
  line-height: 20px;
  margin-top: 10px;
}
.w-editor-bem-RichTextInput_Content h6 {
  font-size: 12px;
  line-height: 18px;
  margin-top: 10px;
}
.w-editor-bem-RichTextInput_Content p {
  margin-top: 0;
  margin-bottom: 10px;
}
.w-editor-bem-RichTextInput_Content blockquote {
  margin: 0 0 10px 0;
  padding: 10px 20px;
  border-left: 5px solid #E2E2E2;
  font-size: 18px;
  line-height: 22px;
}
.w-editor-bem-RichTextInput_Content figure {
  margin: 0;
  margin-bottom: 10px;
}
.w-editor-bem-RichTextInput_Content figcaption {
  margin-top: 5px;
  text-align: center;
}
.w-editor-bem-RichTextInput_Content ol,
.w-editor-bem-RichTextInput_Content ul {
  overflow: hidden;
}
.w-editor-bem-RichTextInput_Content .w-richtext-figure-selected.w-richtext-figure-type-video div:after,
.w-editor-bem-RichTextInput_Content .w-richtext-figure-selected[data-rt-type="video"] div:after {
  outline: 2px solid #2895f7;
}
.w-editor-bem-RichTextInput_Content .w-richtext-figure-selected.w-richtext-figure-type-image div,
.w-editor-bem-RichTextInput_Content .w-richtext-figure-selected[data-rt-type="image"] div {
  outline: 2px solid #2895f7;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-video > div:after,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="video"] > div:after {
  content: '';
  position: absolute;
  display: none;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}
.w-editor-bem-RichTextInput_Content figure {
  position: relative;
  max-width: 60%;
}
.w-editor-bem-RichTextInput_Content figure > div:before {
  cursor: default!important;
}
.w-editor-bem-RichTextInput_Content figure img {
  width: 100%;
}
.w-editor-bem-RichTextInput_Content figure figcaption.w-richtext-figcaption-placeholder {
  opacity: 0.6;
}
.w-editor-bem-RichTextInput_Content figure div {
  /* fix incorrectly sized selection border in the data manager */
  font-size: 0px;
  color: transparent;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-image,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="image"] {
  display: table;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-image > div,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="image"] > div {
  display: inline-block;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-image > figcaption,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="image"] > figcaption {
  display: table-caption;
  caption-side: bottom;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-video,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="video"] {
  width: 60%;
  height: 0;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-video iframe,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="video"] iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-video > div,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="video"] > div {
  width: 100%;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-center {
  margin-right: auto;
  margin-left: auto;
  clear: both;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-center.w-richtext-figure-type-image > div,
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-center[data-rt-type="image"] > div {
  max-width: 100%;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-normal {
  clear: both;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-fullwidth {
  width: 100%;
  max-width: 100%;
  text-align: center;
  clear: both;
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-fullwidth > div {
  display: inline-block;
  /* padding-bottom is used for aspect ratios in video figures
      we want the div to inherit that so hover/selection borders in the designer-canvas
      fit right*/
  padding-bottom: inherit;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-fullwidth > figcaption {
  display: block;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-floatleft {
  float: left;
  margin-right: 15px;
  clear: none;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-align-floatright {
  float: right;
  margin-left: 15px;
  clear: none;
}
.w-editor-bem-RichTextInput_Content ul,
.w-editor-bem-RichTextInput_Content ol {
  margin-top: 0px;
  margin-bottom: 10px;
  padding-left: 40px;
}
.w-editor-bem-RichTextInput_Content .w-list-unstyled {
  padding-left: 0;
  list-style: none;
}
.w-editor-bem-RichTextInput_Content figure.w-richtext-figure-type-video > div:after,
.w-editor-bem-RichTextInput_Content figure[data-rt-type="video"] > div:after {
  display: block;
}
.w-editor-bem-RichTextInput_Content h1:first-child,
.w-editor-bem-RichTextInput_Content h2:first-child,
.w-editor-bem-RichTextInput_Content h3:first-child,
.w-editor-bem-RichTextInput_Content h4:first-child,
.w-editor-bem-RichTextInput_Content h5:first-child,
.w-editor-bem-RichTextInput_Content h6:first-child {
  margin-top: 0px;
}
.w-editor-bem-RichTextInput_Content strong,
.w-editor-bem-RichTextInput_Content em,
.w-editor-bem-RichTextInput_Content a {
  display: inline;
  font-size: inherit;
  font-weight: inherit;
  font-style: inherit;
  color: inherit;
}
.w-editor-bem-RichTextInput_Content ol {
  list-style-type: decimal;
}
.w-editor-bem-RichTextInput_Content ul {
  list-style-type: disc;
}
.w-editor-bem-RichTextInput_Content li {
  display: list-item;
  list-style-type: inherit;
}
.w-editor-bem-RichTextInput_Content strong {
  font-weight: bold;
}
.w-editor-bem-RichTextInput_Content em {
  font-style: italic;
}
.w-editor-bem-RichTextInput_Content a {
  color: #6DB9FC;
  text-decoration: none;
  cursor: text!important;
  -webkit-user-select: text!important;
  -moz-user-select: text!important;
  -ms-user-select: text!important;
  user-select: text!important;
}
.w-editor-bem-RichTextInput_Content a:hover {
  text-decoration: underline;
}
.w-editor-bem-RTToolbar {
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  position: absolute;
  height: auto;
  padding: 0;
  left: 0;
  bottom: 0;
  overflow: visible;
  display: table;
}
.w-editor-bem-RTToolbar_ButtonSection {
  float: left;
  border-radius: 2px;
  background-color: #E8E8E8;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17), 0 1px 5px rgba(0, 0, 0, 0.08);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17), 0 1px 5px rgba(0, 0, 0, 0.08);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.w-editor-bem-RTToolbar_ButtonSection-expand {
  width: 100%;
}
.w-editor-bem-RTToolbar_ButtonSection > span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.w-editor-bem-RTToolbar-AddToolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 28px;
  padding: 5px;
}
@-webkit-keyframes fadein {
  0% {
    display: block;
    opacity: 0;
    -webkit-transform: translate(-5px);
    transform: translate(-5px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translate(0px);
    transform: translate(0px);
  }
}
@keyframes fadein {
  0% {
    display: block;
    opacity: 0;
    -webkit-transform: translate(-5px);
    transform: translate(-5px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translate(0px);
    transform: translate(0px);
  }
}
.w-editor-bem-RTToolbar-AddToolbar_SectionContainer {
  display: none;
  opacity: 0;
  margin-top: -6px;
  margin-left: 9px;
  -webkit-transition: opacity 75ms ease;
  transition: opacity 75ms ease;
  -webkit-animation-duration: 100ms;
  animation-duration: 100ms;
  -webkit-animation-name: fadein;
  animation-name: fadein;
}
.w-editor-bem-RTToolbar-AddToolbar_SectionContainer-expanded {
  display: block;
  opacity: 0.95;
  width: 191px;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButton {
  margin-left: -5px;
  width: 20px;
  height: 20px;
  background-color: #E8E8E8;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17), 0 1px 5px rgba(0, 0, 0, 0.08), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17), 0 1px 5px rgba(0, 0, 0, 0.08), inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
  float: left;
  text-align: center;
  cursor: pointer;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  border-top-left-radius: 50%;
  border-top-right-radius: 5%;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-transition: background-color 75ms ease;
  transition: background-color 75ms ease;
  color: #000;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButtonIconContainer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  height: 100%;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-transition: -webkit-transform 75ms ease;
  transition: -webkit-transform 75ms ease;
  transition: transform 75ms ease;
  transition: transform 75ms ease, -webkit-transform 75ms ease;
  opacity: .75;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButtonIcon {
  margin: auto;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButton:hover {
  background-color: #f5f5f5;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButton:hover .w-editor-bem-RTToolbar-AddToolbar_AddButtonIconContainer {
  opacity: 0.95;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButton i {
  opacity: .68;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButton * {
  cursor: pointer;
}
.w-editor-bem-RTToolbar-AddToolbar_AddButton-close > .w-editor-bem-RTToolbar-AddToolbar_AddButtonIconContainer {
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
}
.w-editor-bem-RTToolbar-AddToolbar_AddButton-circle {
  border-top-right-radius: 50%;
  border: none;
}
.w-editor-bem-RTToolbar-LinkToolbar {
  width: 308px;
  font-size: 11px;
}
.w-editor-bem-RTToolbar-LinkToolbar_TextInput {
  float: left;
  height: 31px;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: none;
  padding: 0 10px;
  outline: none;
  color: #262626;
  background-color: #e3e3e3;
  font-size: 11px;
  -webkit-box-flex: 2;
  -ms-flex-positive: 2;
  flex-grow: 2;
}
.w-editor-bem-RTToolbar-LinkToolbar_TextInput::-webkit-input-placeholder {
  color: #999999;
}
.w-editor-bem-RTToolbar-LinkToolbar_ButtonSectionIsland {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-right: 1px solid #c9c9c9;
  white-space: nowrap;
  color: #646464;
  -webkit-box-flex: 2;
  -ms-flex-positive: 2;
  flex-grow: 2;
  position: relative;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}
.w-editor-bem-RTToolbar-LinkToolbar_ButtonSectionIsland-padded {
  padding: 0 10px;
}
.w-editor-bem-RTToolbar-LinkToolbar_ButtonGroupHeadingText {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-item-align: center;
  align-self: center;
  font-size: 12px;
  cursor: default;
}
.w-editor-bem-RTToolbar-LinkToolbar_ChangeButton {
  display: inline;
  position: relative;
  border-right: 1px solid #c9c9c9;
}
.w-editor-bem-RTToolbar-LinkToolbar_ChangeButton:before {
  border: 4px solid transparent;
  border-left: 4px solid #646464;
  position: absolute;
  content: ' ';
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  bottom: -2px;
  right: -2px;
  opacity: .75;
}
.w-editor-bem-RTToolbar-LinkToolbar_ChangeButton:hover:before {
  opacity: .95;
}
.w-editor-bem-RTToolbar-LinkToolbar_ChangeButton-NonChangeable {
  cursor: pointer;
}
.w-editor-bem-RTToolbar-LinkToolbar_ChangeButton-NonChangeable:before {
  display: none;
}
.w-editor-bem-RTToolbar-LinkToolbar_NoteContainer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 0px;
  max-width: 308px;
  position: absolute;
  right: 0px;
}
.w-editor-bem-RTToolbar-LinkToolbar_Busy {
  -webkit-animation: wf-blink 1s infinite;
  animation: wf-blink 1s infinite;
  border-radius: 2px;
  width: 3px;
  height: 5px;
  padding: 2px;
  margin-right: 2px;
}
.w-editor-bem-RTToolbar-LinkToolbar_InputInfo {
  height: 31px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0 5px;
  background-color: #e3e3e3;
}
.w-editor-bem-RTToolbar-LinkToolbar_InputInfoIcon {
  opacity: 0.4;
  -webkit-transition: opacity 75ms ease;
  transition: opacity 75ms ease;
  cursor: help;
}
.w-editor-bem-RTToolbar-LinkToolbar_InputInfoIcon:hover {
  opacity: 1;
}
.w-editor-bem-RTToolbar-FigureSettingsModal {
  border-radius: 3px;
  background: #E8E8E8;
  font-size: 13px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal:not(.w-editor-bem-RTToolbar-hideBoxShadow) {
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.14), 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.14), 0px 3px 15px 0px rgba(0, 0, 0, 0.13);
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Wrapper {
  position: relative;
  display: block;
  font-size: 12px;
  color: #464646;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Container {
  width: 350px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Header {
  height: 36px;
  padding: 0 10px;
  border-radius: 3px 3px 0 0;
  background-color: #f7f7f7;
  border-bottom: 1px solid #e9e9e9;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Body {
  padding: 10px 10px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  background-color: #ffffff;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Label {
  display: block;
  line-height: 1.25;
  font-size: 13px;
  font-weight: normal;
  color: #000;
  margin-bottom: 5px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Section {
  margin: 0 -10px;
  padding: 10px;
  border-bottom: rgba(0, 0, 0, 0.4);
  padding-bottom: 7px;
  border-bottom-color: #e5e5e5;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Section:first-child {
  margin-top: -7px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Section:last-child {
  padding-bottom: 0px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Section + .w-editor-bem-RTToolbar-FigureSettingsModal_Section {
  border: none;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_CloseButton {
  position: absolute;
  top: 0;
  right: 0;
  height: 28px;
  width: 33px;
  padding: 0;
  padding-top: 5px;
  border: 0;
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
  float: right;
  opacity: 0.4;
  -webkit-transition: opacity 75ms ease;
  transition: opacity 75ms ease;
  text-align: center;
  cursor: pointer;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_CloseButton:focus {
  outline: 0;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_CloseButton:hover {
  opacity: 0.95;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Tabs {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  line-height: 20px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Tab {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: -1px;
  padding: 8px 0px 5px;
  margin-right: 20px;
  border-bottom: 2px solid transparent;
  cursor: pointer;
  height: 36px;
  opacity: 0.4;
  margin-right: 17px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Tab:hover,
.w-editor-bem-RTToolbar-FigureSettingsModal_Tab-selected {
  opacity: 1;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Tab-selected {
  border-bottom-color: #333;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Tab-selected {
  cursor: default;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_TabText {
  font-size: 13px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_TabIcon {
  margin-right: 3px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_RowGrow {
  padding-right: 15px;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_RowQuarter {
  width: 25%;
  margin-right: 10px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_RowThree {
  margin-right: 12px;
  margin-left: -2px;
  font-size: 12px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_RowThree:nth-child(1) {
  width: 201px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_RowThree:nth-child(2) {
  margin-top: 2px;
  width: 53px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_RowThree:nth-child(3) {
  margin-right: 0px;
  width: 53px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_PositionButtonContainer {
  margin-left: -2px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_inputContainer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  position: relative;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Input {
  outline: none;
  border-radius: 2px;
  display: block;
  font-family: Inter, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", sans-serif;
  font-size: 9px;
  padding: 8px 9px;
  margin-top: 2px;
  padding: 8px 10px;
  line-height: 18px;
  border: 1px solid #d1d1d1;
  -webkit-box-shadow: inset 0 6px 3px -5px rgba(0, 0, 0, 0.09);
  box-shadow: inset 0 6px 3px -5px rgba(0, 0, 0, 0.09);
  text-shadow: none;
  font-size: inherit;
  -webkit-transition: none;
  transition: none;
  cursor: text;
  background: #fcfcfc;
  height: 31px;
  width: 100%;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Input:placeholder {
  font-size: 13px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Input-halfwidth {
  width: 80px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Input:focus {
  background-image: none;
  border-color: #33a7e1 !important;
  -webkit-box-shadow: inset 0 6px 3px -5px rgba(0, 0, 0, 0.08), 0 0 4px rgba(51, 167, 225, 0.3);
  box-shadow: inset 0 6px 3px -5px rgba(0, 0, 0, 0.08), 0 0 4px rgba(51, 167, 225, 0.3);
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Unit {
  right: 10px;
  margin-top: 12px;
  text-align: right;
  color: #939393;
  position: absolute;
  font-size: 11px;
  float: right;
  height: 12px;
  line-height: normal;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Busy {
  -webkit-animation: wf-blink 1s infinite;
  animation: wf-blink 1s infinite;
  border-radius: 2px;
  width: 3px;
  height: 5px;
  padding: 2px;
  position: absolute;
  right: 20px;
  margin-top: -17px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_NoteContainer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 0;
  margin-bottom: -5px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_DropdownPost {
  margin-top: 10px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_LinkTitle {
  font-size: 13px;
  font-weight: bold;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_MetaBlock {
  margin-top: 10px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_Current {
  color: #bbbbbb;
  margin-left: 5px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_LinkAnchor {
  margin: 0;
  display: inline;
  opacity: 0.4;
  cursor: pointer;
  -webkit-transition: opacity 75ms ease;
  transition: opacity 75ms ease;
  opacity: 0.5;
  display: inline-block;
  color: inherit;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_LinkAnchor:hover {
  opacity: 0.8;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_LinkAnchorIcon {
  position: relative;
  top: 2px;
  margin-left: 4px;
  vertical-align: text-top;
  margin-top: -1px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_GraphicInfo {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  height: 15px;
  font-size: 13px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_GraphicInfoIcon {
  margin-right: 4px;
  margin-left: 2px;
}
.w-editor-bem-RTToolbar-FigureSettingsModal_VerticalSpacer {
  margin-bottom: 10px;
}
.w-editor-bem-FilteredDropDown {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  height: 31px;
  background-color: #e3e3e3;
}
.w-editor-bem-FilteredDropDown_Trigger {
  cursor: pointer;
  height: 31px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-shadow: inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
  box-shadow: inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
  background: #E8E8E8;
}
.w-editor-bem-FilteredDropDown_Trigger:not(.w-editor-bem-FilteredDropDown_Trigger-expanded):hover {
  background-color: #f5f5f5;
}
.w-editor-bem-FilteredDropDown_Trigger:not(.w-editor-bem-FilteredDropDown_Trigger-expanded):before {
  content: '';
  width: 0;
  height: 0;
  position: absolute;
  right: 10px;
  top: 13px;
  border-top: 5px solid #262626;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  pointer-events: none;
}
.w-editor-bem-FilteredDropDown_Trigger-expanded {
  background-color: #e3e3e3;
}
.w-editor-bem-FilteredDropDown_Trigger-expanded:before {
  content: '';
  width: 0;
  height: 0;
  position: absolute;
  right: 10px;
  top: 13px;
  border-bottom: 5px solid #262626;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  pointer-events: none;
}
.w-editor-bem-FilteredDropDown_Input {
  height: 31px;
  color: #262626;
  background-color: #e3e3e3;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: none;
  font-size: 11px;
  outline: none;
  pointer-events: auto;
  width: 100%;
  margin-right: 25px;
  -webkit-box-shadow: inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
  box-shadow: inset 0 -27px 70px -37px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.2);
}
.w-editor-bem-FilteredDropDown_Input::-webkit-input-placeholder {
  color: #999999;
}
.w-editor-bem-FilteredDropDown_Input {
  padding: 0px 10px;
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
}
.w-editor-bem-FilteredDropDown_TriggerTextContainer {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
}
.w-editor-bem-FilteredDropDown_TriggerText {
  padding: 0 25px 0 10px;
  width: 100%;
  text-overflow: ellipsis;
  overflow: hidden;
}
.w-editor-bem-FilteredDropDown_TriggerText-selected {
  color: #292929;
}
.w-editor-bem-FilteredDropDown_ScrollContainer {
  border: 1px solid #c9c9c9!important;
  border-radius: 0 0 3px 3px;
  overflow: hidden;
  margin: 0 -1px;
  cursor: pointer;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
}
.w-editor-bem-FilteredDropDown_ScrollView {
  max-height: 200px;
  border-radius: 0 10px 10px 0;
  overflow: hidden;
}
.w-editor-bem-FilteredDropDown_Menu {
  background-color: #e3e3e3;
  padding: 5px 0;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17), 0 1px 5px rgba(0, 0, 0, 0.08);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.17), 0 1px 5px rgba(0, 0, 0, 0.08);
}
.w-editor-bem-FilteredDropDown_Group {
  margin-top: 9px;
}
.w-editor-bem-FilteredDropDown_Group:first-child {
  margin-top: 0px;
}
.w-editor-bem-FilteredDropDown_GroupHeading {
  margin: 0 0 4px 5px;
  font-size: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #444;
  font-weight: bold;
}
.w-editor-bem-FilteredDropDown_GroupHeading > span {
  color: #000;
}
.w-editor-bem-FilteredDropDown_GroupHeadingLine {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  border-bottom: 2px solid #c9c9c9;
  margin: 0 5px 0 7px;
}
.w-editor-bem-FilteredDropDown_MenuOptionContainer {
  position: relative;
  display: block;
  height: 18px;
  background-color: #e3e3e3;
  color: #262626;
  cursor: pointer;
}
.w-editor-bem-FilteredDropDown_MenuOptionContainer-current {
  background: #4E87BF;
  color: #e5e5e5;
}
.w-editor-bem-FilteredDropDown_MenuOptionContainer-hovered {
  background: #CDCDCD;
}
.w-editor-bem-FilteredDropDown_MenuOption {
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  text-overflow: ellipsis;
  overflow: hidden;
  height: inherit;
}
.w-editor-bem-FilteredDropDown_MenuOptionText {
  width: 100%;
  padding: 0 10px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.w-editor-bem-FilteredDropDown_NoResults {
  padding: 5px 10px;
  font-style: italic;
}
.w-editor-bem-FilteredDropdown_ScrollView {
  scrollbar-width: 7px;
  scrollbar-color: #cdcdcd #e3e3e3;
}
.w-editor-bem-FilteredDropdown_ScrollView::-webkit-scrollbar {
  width: 7px;
  height: 7px;
}
.w-editor-bem-FilteredDropdown_ScrollView::-webkit-scrollbar:horizontal {
  display: none;
}
.w-editor-bem-FilteredDropdown_ScrollView::-webkit-scrollbar-track {
  background: #e3e3e3;
  border-left: 1px solid #cdcdcd;
  cursor: pointer;
}
.w-editor-bem-FilteredDropdown_ScrollView::-webkit-scrollbar-thumb {
  background: #cdcdcd;
}
.w-editor-bem-RTTooltip {
  color: #000000;
}
.w-editor-bem-RTTooltip_Body {
  max-width: 165px;
  word-wrap: normal;
  word-break: normal;
  padding: 6px 8px;
  text-align: center;
  font-size: 11px;
  line-height: 14px;
  color: #fff;
  pointer-events: all;
}
.w-editor-sprite,
.w-editor-has-sprite > i,
.w-editor-bem-EditorBlocker_Button > i,
.w-editor-bem-EditorMainMenu_Tab.w-editor-account-tab > i,
.w-editor-bem-EditorMainMenu_Tab-account > i,
.w-editor-bem-EditorMainMenu_Tab-help > i,
.w-editor-bem-EditorMainMenu_Tab-logout > i,
.w-editor-icon-main,
.w-editor-icon-dynamo,
.w-editor-icon-fallback,
.w-editor-bem-Checkbox_Input::before,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full div.w-editor-item .w-editor-remove,
.w-editor-bem-Checkbox_Input::before {
  display: inline-block;
  background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/editor-sprite.d33659c93d.png);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
@media (min--moz-device-pixel-ratio: 1.5), (-webkit-min-device-pixel-ratio: 1.5), (min-device-pixel-ratio: 1.5), (min-resolution: 1.5dppx) {
  .w-editor-sprite,
  .w-editor-has-sprite > i,
  .w-editor-bem-EditorBlocker_Button > i,
  .w-editor-bem-EditorMainMenu_Tab.w-editor-account-tab > i,
  .w-editor-bem-EditorMainMenu_Tab-account > i,
  .w-editor-bem-EditorMainMenu_Tab-help > i,
  .w-editor-bem-EditorMainMenu_Tab-logout > i,
  .w-editor-icon-main,
  .w-editor-icon-dynamo,
  .w-editor-icon-fallback,
  .w-editor-bem-Checkbox_Input::before,
  .w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove,
  .w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove,
  .w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full div.w-editor-item .w-editor-remove,
  .w-editor-bem-Checkbox_Input::before {
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/img/editor-sprite.4ada61de15.png);
    background-size: 520px;
  }
}
.w-editor-icon-main.w-editor-link2 {
  background-position: -320px -80px;
  width: 12px;
  height: 12px;
}
.w-editor-icon-main.w-editor-common-close {
  background-position: -160px -60px;
  width: 9px;
  height: 9px;
}
.w-editor-icon-main.w-editor-common-warning-white-small {
  background-position: -220px -140px;
  width: 16px;
  height: 15px;
}
.w-editor-icon-main.w-editor-common-warning-red-small {
  background-position: -240px -140px;
  width: 14px;
  height: 11px;
}
.w-editor-icon-main.w-editor-common-add-bigger {
  background-position: -280px -40px;
  width: 10px;
  height: 10px;
  margin-top: 1px;
}
.w-editor-icon-main.w-editor-common-arrow-left {
  background-position: -120px -60px;
  width: 5px;
  height: 9px;
}
.w-editor-icon-main.w-editor-common-arrow-right {
  background-position: -140px -60px;
  width: 5px;
  height: 9px;
}
.w-editor-icon-dynamo.w-editor-back-arrow {
  background-position: -360px -40px;
  width: 14px;
  height: 14px;
}
.w-editor-icon-dynamo.w-editor-checkmark,
.w-editor-bem-Checkbox_Input::before,
.w-editor-bem-Checkbox_Input::before {
  background-position: -200px -40px;
  width: 14px;
  height: 12px;
}
.w-editor-icon-dynamo.w-editor-image-drop {
  background-position: 0px -120px;
  width: 59px;
  height: 68px;
}
.w-editor-icon-dynamo.w-editor-image-size-big {
  background-position: -220px -80px;
  width: 11px;
  height: 7px;
}
.w-editor-icon-dynamo.w-editor-image-dimension-big {
  background-position: -200px -80px;
  width: 9px;
  height: 9px;
}
.w-editor-icon-dynamo.w-editor-image-edit {
  background-position: -240px -80px;
  width: 12px;
  height: 12px;
}
.w-editor-icon-dynamo.w-editor-image-replace {
  background-position: -280px -80px;
  width: 13px;
  height: 12px;
}
.w-editor-icon-dynamo.w-editor-image-delete {
  background-position: -180px -80px;
  width: 11px;
  height: 13px;
}
.w-editor-icon-dynamo.w-editor-item-action-archive {
  background-position: -120px -80px;
  width: 14px;
  height: 12px;
}
.w-editor-icon-dynamo.w-editor-item-action-delete {
  background-position: -160px -80px;
  width: 13px;
  height: 14px;
}
.w-editor-icon-dynamo.w-editor-sync-pending {
  background-position: 0px -40px;
  width: 9px;
  height: 9px;
}
.w-editor-icon-dynamo.w-editor-sync-error {
  background-position: -40px -40px;
  width: 11px;
  height: 9px;
}
.w-editor-icon-dynamo.w-editor-sync-offline {
  background-position: -60px -40px;
  width: 13px;
  height: 9px;
}
.w-editor-icon-dynamo.w-editor-sync-ok {
  background-position: -20px -40px;
  width: 10px;
  height: 8px;
}
.w-editor-icon-dynamo.w-editor-sync-ok-alt {
  background-position: -20px -60px;
  width: 10px;
  height: 8px;
}
.w-editor-icon-dynamo.w-editor-add-item {
  background-position: -280px -40px;
  width: 10px;
  height: 10px;
}
.w-editor-icon-dynamo.w-editor-add-item-inline {
  background-position: -240px 0px;
  width: 13px;
  height: 13px;
}
.w-editor-icon-dynamo.w-editor-warning-yellow {
  background-position: -120px -120px;
  width: 37px;
  height: 32px;
}
.w-editor-icon-dynamo.w-editor-warning-red {
  background-position: -160px -120px;
  width: 37px;
  height: 32px;
}
.w-editor-icon-dynamo.w-editor-close {
  background-position: -180px -40px;
  width: 11px;
  height: 11px;
}
.w-editor-icon-dynamo.w-editor-close-sm {
  background-position: -180px -60px;
  width: 9px;
  height: 9px;
}
.w-editor-icon-dynamo.w-editor-chevron-up {
  background-position: -120px -40px;
  width: 9px;
  height: 5px;
}
.w-editor-icon-dynamo.w-editor-chevron-down {
  background-position: -140px -40px;
  width: 9px;
  height: 5px;
}
.w-editor-icon-dynamo.w-editor-search-big {
  background-position: -460px -40px;
  width: 15px;
  height: 15px;
}
.w-editor-icon-dynamo.w-editor-field-color-button {
  background-position: -40px -80px;
  width: 14px;
  height: 14px;
}
.w-editor-icon-dynamo.w-editor-field-color-button2 {
  background-position: -40px -100px;
  width: 9px;
  height: 15px;
}
.w-editor-icon-dynamo.w-editor-field-color-triangle {
  background-position: -60px -80px;
  width: 12px;
  height: 12px;
}
.w-editor-icon-dynamo.w-editor-field-date-button {
  background-position: 0px -80px;
  width: 18px;
  height: 19px;
}
.w-editor-icon-dynamo.w-editor-field-time-button {
  background-position: -20px -80px;
  width: 18px;
  height: 18px;
}
.w-editor-icon-dynamo.w-editor-caret-big-up {
  background-position: -80px -40px;
  width: 7px;
  height: 4px;
}
.w-editor-icon-dynamo.w-editor-caret-big-down {
  background-position: -100px -40px;
  width: 7px;
  height: 4px;
}
.w-editor-icon-dynamo.w-editor-required-asterisk {
  background-position: -480px -40px;
  width: 5px;
  height: 5px;
}
.w-editor-icon-dynamo.w-editor-edit-text {
  background-position: -120px 0px;
  width: 13px;
  height: 14px;
}
.w-editor-icon-dynamo.w-editor-common-edit {
  background-position: 0px -60px;
  width: 12px;
  height: 12px;
}
.w-editor-icon-dynamo.w-editor-open-page {
  background-position: -360px 0px;
  width: 16px;
  height: 20px;
}
.w-editor-icon-dynamo.w-editor-status-draft {
  background-position: -400px -80px;
  width: 10px;
  height: 10px;
}
.w-editor-icon-dynamo.w-editor-status-published {
  background-position: -420px -80px;
  width: 6px;
  height: 6px;
}
.w-editor-icon-dynamo.w-editor-status-pending {
  background-position: -440px -80px;
  width: 10px;
  height: 10px;
}
.w-editor-icon-dynamo.w-editor-status-published-pending {
  background-position: -460px -80px;
  width: 10px;
  height: 10px;
}
.w-editor-icon-dynamo.w-editor-status-archived {
  background-position: -140px -80px;
  width: 12px;
  height: 10px;
}
.w-editor-icon-dynamo.w-editor-status-archived {
  background-position: -140px -80px;
  width: 12px;
  height: 10px;
}
.w-editor-icon-dynamo.w-editor-status-scheduled {
  background-position: 0px -80px;
  width: 18px;
  height: 20px;
}
.w-editor-icon-dynamo.w-editor-publish-white {
  background-position: -80px -100px;
  width: 13px;
  height: 14px;
}
.w-editor-icon-dynamo.w-editor-checkmark-white {
  background-position: -40px -60px;
  width: 10px;
  height: 8px;
}
.w-editor-icon-dynamo.w-editor-open-page {
  background-position: -360px 0px;
  width: 16px;
  height: 20px;
}
.w-editor-icon-dynamo.w-editor-open-page-small {
  background-position: -380px 0px;
  width: 16px;
  height: 17px;
}
.w-editor-icon-dynamo.w-editor-folder {
  background-position: -320px -20px;
  width: 18px;
  height: 13px;
}
.w-editor-icon-dynamo.w-editor-home-icon {
  background-position: -280px 0px;
  width: 16px;
  height: 14px;
}
.w-editor-icon-dynamo.w-editor-home-icon-blue {
  background-position: -300px 0px;
  width: 16px;
  height: 14px;
}
.w-editor-icon-dynamo.w-editor-page-icon {
  background-position: -320px 0px;
  width: 16px;
  height: 15px;
}
.w-editor-icon-dynamo.w-editor-page-icon-blue {
  background-position: -340px 0px;
  width: 16px;
  height: 15px;
}
.w-editor-icon-dynamo.w-editor-remove-tag,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-not-full div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input div.w-editor-item .w-editor-remove,
.w-editor-bem-TagSelect .w-editor-selectize-control .w-editor-selectize-input.w-editor-has-items div.w-editor-item .w-editor-remove {
  background-position: -220px -60px;
  width: 8px;
  height: 8px;
}
.w-editor-icon-dynamo.w-editor-remove-tag-big {
  background-position: -220px -40px;
  width: 10px;
  height: 10px;
}
.w-editor-icon-dynamo.w-spinner-uploading-thin {
  background-position: -280px -120px;
  width: 11px;
  height: 9px;
}
.w-editor-icon-dynamo.w-spinner-uploading {
  background-position: -300px -120px;
  width: 12px;
  height: 12px;
}
.w-editor-icon-dynamo.w-spinner-cancel-thin {
  background-position: -320px -120px;
  width: 9px;
  height: 9px;
}
.w-editor-icon-dynamo.w-spinner-cancel {
  background-position: -340px -120px;
  width: 10px;
  height: 10px;
}
.w-editor-icon-dynamo.w-spinner-success-thin {
  background-position: -320px -140px;
  width: 10px;
  height: 7px;
}
.w-editor-icon-dynamo.w-spinner-success {
  background-position: -340px -140px;
  width: 12px;
  height: 9px;
}
.w-editor-icon-fallback.w-editor-close {
  background-position: -160px -40px;
  width: 11px;
  height: 11px;
}
.w-editor-icon-fallback.w-editor-chrome {
  background-position: 0px -200px;
  width: 64px;
  height: 64px;
}
.w-editor-icon-fallback.w-editor-firefox {
  background-position: -80px -200px;
  width: 64px;
  height: 64px;
}
.w-editor-icon-fallback.w-editor-msie {
  background-position: -160px -200px;
  width: 64px;
  height: 64px;
}
.w-editor-icon-fallback.w-editor-safari {
  background-position: -240px -200px;
  width: 64px;
  height: 64px;
}
@-webkit-keyframes w-editor-flash-row {
  0%,
  50% {
    background: #F3F8FC;
  }
  100% {
    background: white;
  }
}
@keyframes w-editor-flash-row {
  0%,
  50% {
    background: #F3F8FC;
  }
  100% {
    background: white;
  }
}
@-webkit-keyframes w-editor-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes w-editor-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes w-editor-fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes w-editor-fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.w-editor-fade-in {
  -webkit-animation: w-editor-fade-in 200ms ease normal both;
  animation: w-editor-fade-in 200ms ease normal both;
}
@-webkit-keyframes w-editor-scale-in {
  0% {
    -webkit-transform: scale(0.88);
    transform: scale(0.88);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes w-editor-scale-in {
  0% {
    -webkit-transform: scale(0.88);
    transform: scale(0.88);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
.w-editor-scale-in {
  -webkit-animation: w-editor-scale-in 300ms cubic-bezier(0.165, 0.84, 0.44, 1) normal both;
  animation: w-editor-scale-in 300ms cubic-bezier(0.165, 0.84, 0.44, 1) normal both;
}
.w-editor-bem-Button + .w-editor-bem-Button {
  margin-left: 12px;
}
.w-editor-bem-EditorLogo + .w-editor-bem-EditorMainMenu_Tabs,
.w-editor-bem-EditorMainMenu_Tabs + .w-editor-bem-ProfilePictures {
  margin-left: 10px;
  margin-right: 10px;
}
.w-editor-bem-Heading + .w-editor-bem-EditorAccordion {
  margin-top: 5px;
}
.w-editor-bem-EditorLogo + .w-editor-bem-Heading {
  margin-top: 10px;
}
.w-editor-bem-ProfilePicture + .w-editor-bem-View {
  margin-top: 2px;
}
.w-editor-bem-Field + .w-editor-bem-FieldRow,
.w-editor-bem-FieldRow + .w-editor-bem-Field {
  margin-top: 20px;
}
.w-editor-bem-Form_Body > .w-editor-bem-Pane_Message:first-child {
  margin: 20px 0;
}
.w-editor-bem-Pane_Message + .w-editor-bem-Pane_Section {
  margin-top: 10px;
}
.w-editor-bem-Confirm_ActionButton + .w-editor-bem-Confirm_CancelButton {
  margin-left: auto;
}
html {
  overflow-y: scroll;
}
html.w-editor-open {
  overflow: hidden;
  scollbar-width: none;
}
html.w-editor-open::-webkit-scrollbar {
  -webkit-appearance: none;
}
html.w-editor:after {
  position: relative;
  display: block;
  visibility: hidden;
  height: 46px;
  content: "";
}
html [contenteditable]:not(.w-editor-rich-field-input) {
  outline: none;
}
html [contenteditable="true"] {
  -webkit-user-select: text;
  -moz-user-select: text;
  -ms-user-select: text;
  user-select: text;
}
html [contenteditable="true"] a {
  cursor: text;
}
html .w-editor-no-collapse:before {
  content: "\A0" !important;
}
html .w-editor-body .w-embed.w-script,
html [class*='w-editor-edit'] .w-rte-editable .w-embed,
html [class*='w-editor-edit'] .w-editor-bem-RichTextInput .w-embed {
  height: 76px;
  margin-bottom: 10px;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAkCAYAAAD7PHgWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAASRJREFUeNrM11ENgzAQgOFuCpCABCQgAQlIQEIdIAEJSKgE5qASmAPWJpCQbdDe9dq7Jvc6voz0300putO6Wd1sbjol8Cw7btuhlSRcf8Ido6Xg/Ddl/wD91BKA+gLnZ+LG1aeLcTUtJ3AK4PwYLlwTgTum5wAaANCWxnUAHEt2LAJYLN4DAlcsO9VNVr7PxhHv8ebBscBs2akDry8WmC3eMyFwoca1ERcAAiSP95IBSJadPjIhUCBJvCtAlDHANTU7GhBhDDAp3jG7HgUQnZ0J+JAUIDjejYL/zqYAwX9VjcIvBNixlFHONVHZsYzAYLwHRtwxI2bXK3FJgjujTvxQSqCB7nqlgT/xngUCFwlZidoZjWDg+rh4PWLO081LsO/9EWAAerCRFDZulF0AAAAASUVORK5CYII=);
  background-position: 16px 50%;
  background-repeat: no-repeat;
  background-size: 20px;
  background-color: #eee;
  border: 1px dashed #ddd;
}
html .w-editor-body .w-embed.w-script:before,
html [class*='w-editor-edit'] .w-rte-editable .w-embed:before,
html [class*='w-editor-edit'] .w-editor-bem-RichTextInput .w-embed:before {
  content: 'You can\2019t see this custom code while you\2019re in the Editor, but your website visitors will.';
  padding: 28px 28px 28px 51px;
  position: absolute;
  color: #999;
  font-style: italic;
  font-weight: normal;
  line-height: 17px;
}
html .w-editor-body .w-embed.w-script > *,
html [class*='w-editor-edit'] .w-rte-editable .w-embed > *,
html [class*='w-editor-edit'] .w-editor-bem-RichTextInput .w-embed > * {
  display: none;
}
[href-disabled-default-color] {
  color: -webkit-link;
}
[href-disabled-underline] {
  text-decoration: underline;
}
.w-dyn-list figure.w-richtext-figure-type-video > div:after,
.w-rte-editable figure.w-richtext-figure-type-video > div:after,
.w-dyn-list figure[data-rt-type="video"] > div:after,
.w-rte-editable figure[data-rt-type="video"] > div:after {
  display: block;
}
.w-rte-editable {
  cursor: text;
  -webkit-user-select: text;
  -moz-user-select: text;
  -ms-user-select: text;
  user-select: text;
}
a.w-rte-editable:not([contenteditable="true"]),
a .w-rte-editable:not([contenteditable="true"]) {
  cursor: pointer;
}
</style>