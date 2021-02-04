import { setupMeshAnimation } from './animation';

export default () => {
  const mesh = $('.interactiveMesh');
  mesh.each(setupMeshAnimation);
};
