// // import Snap from 'snapsvg';
// import BezierEasing from 'bezier-easing';
// import { points, lines } from './shape';

// const ease = BezierEasing(.5, 0, .5, 1);

// const CONTAINER_W = 500;
// const CONTAINER_H = 485;

// const FORCE_RANGE = 50;
// const FORCE_STRENGTH = 1;

// const ANIMATION_DURATION = 10000;
// const INIT_DELAY = 1000;
// const WARMUP_DURATION = 2000;

// let mouseLastPosition = [0,0];
// let animationStart;

// const distanceToMouse = ([x, y]) => {
//   const [mouseX, mouseY] = mouseLastPosition;
//   return Math.sqrt(Math.pow((x - mouseX), 2) + Math.pow(y - mouseY, 2));
// }

// const mouseRepealVector = ([x, y]) => {
//   const [mouseX, mouseY] = mouseLastPosition;
//   const v = [
//     x - mouseX,
//     y - mouseY,
//   ]
//   const vMagnitude = Math.sqrt(v[0] * v[0] + v[1] * v[1]);

//   return [
//     v[0] / vMagnitude || 1,
//     v[1] / vMagnitude || 1,
//   ]
// }

// const getForceForDistace = distance => {
//   const progress = Math.min(1, distance / FORCE_RANGE);
//   return FORCE_STRENGTH * ease(progress);
// }

// const pointEasings = points.map((_, index) => {
//   const progressOffset = Math.random();
//   const xMult = 2 * (Math.random() - .5); // < -1, 1 >
//   const yMult = 2 * (Math.random() - .5); // < -1, 1 >

//   return (([x, y], globalProgress) => {
//     const repealVector = mouseRepealVector([x, y]);
//     const repealStrength = getForceForDistace(distanceToMouse([x, y]));

//     const progress = (globalProgress + progressOffset) % 1;
//     const maxOffset = 10;

//     let localProgress;
//     if (progress < .5) {
//       localProgress = progress / .5;
//     } else {
//       localProgress = 1 - (progress - 0.5) / .5
//     }

//     const offset = ease(localProgress) * maxOffset;
//     const warmupProgress = Math.min(1, (Date.now() - animationStart) / WARMUP_DURATION)

//     return [
//       x + warmupProgress * (offset * xMult - repealVector[0] * repealStrength),
//       y + warmupProgress * (offset * yMult - repealVector[1] * repealStrength),
//     ];
//   })
// })

// const polylinePath = (pointsProgression, alter) => {
//   const fn = alter ? alter : ((p) => p);
//   return pointsProgression.map(id => fn(points[id], id)).flat();
// };

// const runIdleAnimation = (line, linePoints) => {
//   Snap.animate(
//     0,
//     1,
//     val => {
//       line.attr({
//         points: polylinePath(linePoints, (point, id) => pointEasings[id](point, val)),
//       });
//     },
//     ANIMATION_DURATION,
//     null,
//     () => runIdleAnimation(line, linePoints)
//   );
// };

// export const setupMeshAnimation = (_, el) => {
//   const svg = Snap(CONTAINER_W, CONTAINER_H);
//   svg.attr({ viewBox: `0 0 ${CONTAINER_W} ${CONTAINER_H}` });

//   const paths = lines.map(line => polylinePath(line));
//   const lineElements = paths.map(path => svg.polyline(path).attr({ strokeWidth: 0.25, stroke: 'white', fill: 'none' }));

//   setTimeout(() => {
//     animationStart = Date.now();
//     lineElements.forEach((el, index) => runIdleAnimation(el, lines[index]))
//   }, INIT_DELAY);

//   svg.appendTo(el);

//   document.addEventListener('mousemove', (ev) => {
//     const {  clientX, clientY } = ev;
//     const { x: rootX, y: rootY, width, height } = svg.node.getBoundingClientRect();
//     mouseLastPosition = [
//       (clientX - rootX) / width * CONTAINER_W,
//       (clientY - rootY) / height * CONTAINER_H,
//     ]
//   })
// };
