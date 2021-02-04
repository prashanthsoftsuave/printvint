import { MOBILE_BREAKPOINT } from "./constants";

export function isMobile() {
  return window.innerWidth < MOBILE_BREAKPOINT;
}
