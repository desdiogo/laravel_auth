const requireContext = require.context('../components/pages', true, /.*\.vue$/)

export const components = requireContext.keys()
  .map(file =>
    [file.replace(/(^.\/)|(\/)|(\.vue$)/g, ''), requireContext(file)]
  )
  .reduce((components, [name, component]) => {
    components[name] = component.default || component
    return components
  }, { })
